<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

namespace Tygh\Addons\StripeConnect\Payments;

use Exception;
use Stripe\Account;
use Stripe\BalanceTransaction;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\PaymentIntent;
use Stripe\Refund;
use Stripe\Stripe;
use Stripe\Token;
use Stripe\Transfer;
use Tygh\Addons\StripeConnect\PayoutsManager;
use Tygh\Addons\StripeConnect\PriceFormatter;
use Tygh\Common\OperationResult;
use Tygh\Database\Connection;

/**
 * Class StripeConnect implements Stipe Connect payment method.
 * Uses Transfers: the whole payment is collected by the store owner and withdrawals are performed via Transfers.
 *
 * @package Tygh\Addons\StripeConnect\Payments
 */
class StripeConnect
{
    /** @var string */
    const API_VERSION = '2019-05-16';

    /** @var string */
    const PAYMENT_INTENT_STATUS_SUCCEDED = 'succeeded';

    /** @var string */
    const PAYMENT_INTENT_STATUS_REQUIRES_ACTION = 'requires_action';

    /** @var string */
    const PAYMENT_INTENT_STATUS_REQUIRES_CONFIRMATION = 'requires_confirmation';

    /** @var string $processor_script */
    protected static $processor_script = 'stripe_connect.php';

    /** @var string $payment_name */
    protected static $payment_name = 'stripe_connect';

    /** @var array $receivers_cache */
    protected static $receivers_cache = [];

    /** @var array $order_info */
    protected $order_info = [];

    /** @var array $processor_params */
    protected $processor_params = [];

    /** @var int $payment_id */
    protected $payment_id;

    /** @var Connection $db */
    protected $db;

    /** @var array $addon_settings */
    protected $addon_settings;

    /** @var PriceFormatter $price_formatter */
    protected $price_formatter;

    /** @var \Stripe\Charge[] */
    protected $charges_cache = [];

    /** @var int[] */
    protected $nets_cache = [];

    /**
     * StripeConnect constructor.
     *
     * @param int                                       $payment_id       Payment method ID
     * @param \Tygh\Database\Connection                 $db               Database connection
     * @param \Tygh\Addons\StripeConnect\PriceFormatter $price_formatter  Formatter
     * @param array                                     $addon_settings   Stripe Connect add-on settings
     * @param array|null                                $processor_params Payment processor configuration.
     *                                                                    When set to null, will be obtained from the
     *                                                                    database
     */
    public function __construct(
        $payment_id,
        Connection $db,
        PriceFormatter $price_formatter,
        array $addon_settings,
        $processor_params = null
    ) {
        $this->payment_id = $payment_id;
        $this->db = $db;
        $this->price_formatter = $price_formatter;
        $this->addon_settings = $addon_settings;

        if ($processor_params === null) {
            $this->processor_params = static::getProcessorParameters($payment_id);
        } else {
            $this->processor_params = $processor_params;
        }

        Stripe::setApiKey($this->processor_params['secret_key']);
        Stripe::setClientId($this->processor_params['client_id']);
        Stripe::setApiVersion(self::API_VERSION);
    }

    /**
     * Obtains Stripe Connect based payment method processor parameters.
     *
     * @param int|null $payment_id If specified, processor parameters of the specified payment method will be returned.
     *                             Otherwise, first suitable method will be used.
     *
     * @return array
     */
    public static function getProcessorParameters($payment_id = null)
    {
        if ($payment_id === null) {
            if ($processor = fn_get_processor_data_by_name(static::getScriptName())) {
                if ($payment = fn_get_payment_by_processor($processor['processor_id'])) {
                    $payment = reset($payment);
                    $payment_id = $payment['payment_id'];
                }
            }
        }

        if ($processor_data = fn_get_processor_data($payment_id)) {
            return $processor_data['processor_params'];
        }

        return [
            'client_id'       => null,
            'publishable_key' => null,
            'secret_key'      => null,
            'currency'        => null,
        ];
    }

    /**
     * Gets payment processor script name.
     *
     * @return string
     */
    public static function getScriptName()
    {
        return static::$processor_script;
    }

    /**
     * Gets payment method name.
     *
     * @return string
     */
    public static function getPaymentName()
    {
        return static::$payment_name;
    }

    /**
     * Performs payment.
     *
     * @param array $order_info Order to pay for.
     *
     * @return array Payment processor response
     */
    public function charge(array $order_info)
    {
        $pp_response = [
            'order_status'                     => STATUS_INCOMPLETED_ORDER,
            'reason_text'                      => '',
            'stripe_connect.payment_intent_id' => '',
            'stripe_connect.token'             => '',
        ];

        $this->order_info = $order_info;

        $orders_queue = $this->getOrdersToCharge($order_info);

        // Check that all receivers are valid accounts
        if (!$this->validateOrdersQueueReceivers($orders_queue)) {
            $pp_response['order_status'] = 'F';

            return $pp_response;
        }

        try {
            $payment_intent = PaymentIntent::retrieve($order_info['payment_info']['stripe_connect.payment_intent_id']);
            if ($payment_intent->status === self::PAYMENT_INTENT_STATUS_REQUIRES_CONFIRMATION) {
                $payment_intent->confirm();
            }

            $charge = $this->getChargeByPaymentIntent($payment_intent);
            fn_update_order_payment_info(
                $order_info['order_id'],
                [
                    'stripe_connect.charge_id' => $charge->id,
                ]
            );

            foreach ($orders_queue as $order_id => $company_id) {
                if (!$company_id) {
                    // fallback for Vendor debt payout
                    continue;
                }

                $suborder_info = fn_get_order_info($order_id);
                $payouts_manager = new PayoutsManager($company_id);

                if (!empty($suborder_info['use_gift_certificates'])) {
                    fn_update_order_staff_only_notes($order_id, __('stripe_connect.gift_certificate_used', [
                        '[product]' => PRODUCT_NAME
                    ]));
                }

                if (!$this->formatAmount($suborder_info['total'])) {
                    continue;
                }

                if (empty($suborder_info['use_gift_certificates'])) {

                    $transfer = $this->transferFunds($suborder_info, $payouts_manager, $charge);
                    fn_update_order_payment_info(
                        $order_id,
                        [
                            'stripe_connect.transfer_id' => $transfer->id,
                        ]
                    );

                    $withdrawal = $transfer->metadata['withdrawal'];
                    if ($withdrawal) {
                        $payouts_manager->createWithdrawal($withdrawal, $order_id);
                        if ($this->addon_settings['collect_payouts']) {
                            $payouts_manager->acceptPayouts();
                        }
                    }
                }
            }

            $pp_response['order_status'] = 'P';
        } catch (Exception $e) {
            $pp_response['order_status'] = 'F';
            $pp_response['reason_text'] = $e->getMessage();
        }

        return $pp_response;
    }

    public function chargeByToken(array $order_info)
    {
        $pp_response = [
            'order_status'                     => STATUS_INCOMPLETED_ORDER,
            'reason_text'                      => '',
            'stripe_connect.payment_intent_id' => '',
            'stripe_connect.token'             => '',
        ];

        $this->order_info = $order_info;

        $orders_queue = $this->getOrdersToCharge($order_info);

        // Check that all receivers are valid accounts
        if (!$this->validateOrdersQueueReceivers($orders_queue)) {
            $pp_response['order_status'] = 'F';

            return $pp_response;
        }

        try {
            $customer = $this->createCustomer($order_info);

            foreach ($orders_queue as $order_id => $company_id) {
                $suborder_info = fn_get_order_info($order_id);
                $payouts_manager = new PayoutsManager($company_id);

                if (!empty($suborder_info['use_gift_certificates'])) {
                    fn_update_order_staff_only_notes($order_id, __('stripe_connect.gift_certificate_used', [
                        '[product]' => PRODUCT_NAME
                    ]));
                }

                if (!$this->formatAmount($suborder_info['total'])) {
                    continue;
                }

                $charge = $this->chargeCustomer($suborder_info, $customer, $payouts_manager);
                fn_update_order_payment_info(
                    $order_id,
                    [
                        'stripe_connect.charge_id' => $charge->id,
                    ]
                );

                if (!$company_id) {
                    // fallback for Vendor debt payout
                    continue;
                }

                if (empty($suborder_info['use_gift_certificates'])) {
                    $withdrawal = $charge->metadata['withdrawal'];
                    if ($withdrawal) {
                        $payouts_manager->createWithdrawal($withdrawal, $order_id);
                        if ($this->addon_settings['collect_payouts']) {
                            $payouts_manager->acceptPayouts();
                        }
                    }
                }
            }

            $customer->delete();

            $pp_response['order_status'] = 'P';
        } catch (Exception $e) {
            $pp_response['order_status'] = 'F';
            $pp_response['reason_text'] = $e->getMessage();
        }

        return $pp_response;
    }

    /**
     * Gets orders that should be paid.
     *
     * @param array $order Parent order info
     *
     * @return array Keys are order IDs, values are vendors IDs
     */
    protected function getOrdersToCharge(array $order)
    {
        if ($order['status'] === STATUS_PARENT_ORDER) {
            $queue = $this->db->getSingleHash(
                'SELECT order_id, company_id FROM ?:orders WHERE parent_order_id = ?i',
                ['order_id', 'company_id'],
                $order['order_id']
            );
        } else {
            $queue = [
                $order['order_id'] => $order['company_id'],
            ];
        }

        return $queue;
    }

    /**
     * Obtains Stripe account ID to transfer funds to.
     *
     * @param int $company_id Vendor company ID.
     *
     * @return string Stripe account ID
     */
    public static function getChargeReceiver($company_id)
    {
        if (!isset(static::$receivers_cache[$company_id])) {
            if ($company_id) {
                $company_data = fn_get_company_data($company_id);
                static::$receivers_cache[$company_id] = $company_data['stripe_connect_account_id'];
            } else {
                static::$receivers_cache[$company_id] = static::getOwnerAccountId();
            }
        }

        return static::$receivers_cache[$company_id];
    }

    /**
     * Formats payment amount by currency.
     *
     * @param float $amount Payment amount
     *
     * @return int Order amount <b>in cents</b>
     */
    protected function formatAmount($amount)
    {
        return $this->price_formatter->asCents($amount, $this->processor_params['currency']);
    }

    /**
     * Calculated application fee that will be excluded from the charge transaction.
     *
     * @param array          $order_info      Order to charge
     * @param PayoutsManager $payouts_manager Configured payouts manager
     * @param \Stripe\Charge $charge          Associated charge
     *
     * @return array Application fee in primary currency and in configured payment method's currency (cents)
     */
    protected function getWithdrawalAmount(array $order_info, PayoutsManager $payouts_manager, Charge $charge = null)
    {
        $application_fee = $payouts_manager->getOrderFee($order_info['order_id']);

        // hold back vendor payouts
        if ($this->addon_settings['collect_payouts']) {
            $application_fee += $payouts_manager->getPendingPayoutsFee();
        }

        $application_fee = min($application_fee, $order_info['total']);

        // the withdrawal that will be displayed in the Accounting
        $accounting_withdrawal = $order_info['total'] - $application_fee;
        $transfer_withdrawal = $accounting_withdrawal;

        if ($charge) {
            $net = $this->getChargeNet($charge);
            // the withdrawal that will be sent as the Transfer to vendor
            $transfer_withdrawal *= $net / $charge->amount;
        }

        $transfer_withdrawal = $this->formatAmount($transfer_withdrawal);
        $application_fee = $this->formatAmount($application_fee);

        return [$accounting_withdrawal, $transfer_withdrawal, $application_fee];
    }

    /**
     * Refunds charge.
     *
     * @param array $order_info Refunded order info
     * @param float $amount     Refunded amount
     *
     * @return string
     */
    public function refund(array $order_info, $amount)
    {
        if (!empty($order_info['payment_info']['stripe_connect.transfer_id'])) {
            $transfer = Transfer::retrieve($order_info['payment_info']['stripe_connect.transfer_id']);

            $refund = $transfer->reverse([
                'amount' => $this->formatAmount($amount),
            ]);
        } else {
            // fallback for Vendor debt payout
            $charge_id = $order_info['payment_info']['stripe_connect.charge_id'];

            $refund = Refund::create([
                'charge' => $charge_id,
                'amount' => $this->formatAmount($amount),
                'reason' => 'requested_by_customer',
            ]);
        }

        return $refund->id;
    }

    /**
     * Checks that all companies in an order have valid Stripe account.
     *
     * @param array $orders_queue Orders queue
     *
     * @return bool
     */
    protected function validateOrdersQueueReceivers(array $orders_queue)
    {
        try {
            foreach ($orders_queue as $company_id) {
                $account_id = StripeConnect::getChargeReceiver($company_id);
                Account::retrieve($account_id);
            }
        } catch (Exception $e) {
            return false;
        }

        return true;
    }

    /**
     * Gets store's owner account ID.
     *
     * @return null|string Account ID or null if an error occured
     */
    public static function getOwnerAccountId()
    {
        $params = static::getProcessorParameters();

        Stripe::setApiKey($params['secret_key']);
        Stripe::setClientId($params['client_id']);
        Stripe::setApiVersion(self::API_VERSION);

        $owner_id = null;
        try {
            $owner = Account::retrieve();
            $owner_id = $owner->id;
        } catch (Exception $e) {
        }

        return $owner_id;
    }

    /**
     * Gets payment intent confirmation details.
     *
     * @param string $payment_intent_payment_method_id Payment method ID
     * @param float  $total                            Payment total
     *
     * @return \Tygh\Common\OperationResult
     */
    public function getPaymentConfirmationDetails($payment_intent_payment_method_id, $total)
    {
        $result = new OperationResult(false);

        $intent = PaymentIntent::create([
            'payment_method'      => $payment_intent_payment_method_id,
            'amount'              => $this->formatAmount($total),
            'currency'            => $this->processor_params['currency'],
            'confirmation_method' => 'manual',
            'confirm'             => true,
        ]);

        $is_success = in_array($intent->status,
            [
                self::PAYMENT_INTENT_STATUS_REQUIRES_ACTION,
                self::PAYMENT_INTENT_STATUS_SUCCEDED,
            ]);
        $result->setSuccess($is_success);

        $result->setData($intent->id, 'payment_intent_id');

        if ($intent->status === self::PAYMENT_INTENT_STATUS_REQUIRES_ACTION) {
            $result->setData(true, 'requires_confirmation');
            $result->setData($intent->client_secret, 'client_secret');
        }

        return $result;
    }

    /**
     * Transfers vendor's withdrawal to his/her Stripe account.
     *
     * @param array                                     $order_info
     * @param \Tygh\Addons\StripeConnect\PayoutsManager $payouts_manager
     * @param \Stripe\Charge                            $charge
     *
     * @return \Stripe\Transfer
     */
    protected function transferFunds(array $order_info, PayoutsManager $payouts_manager, Charge $charge)
    {
        $receiver = static::getChargeReceiver($order_info['company_id']);

        list($accounting_withdrawal, $transfer_amount) = $this->getWithdrawalAmount($order_info, $payouts_manager, $charge);
        $description = $this->getWithdrawalDescription($order_info['order_id'], $order_info['company_id']);

        $transfer = Transfer::create([
            'currency'           => $this->processor_params['currency'],
            'destination'        => $receiver,
            'amount'             => $transfer_amount,
            'description'        => $description,
            'metadata'           => [
                'order_id'   => $order_info['order_id'],
                'withdrawal' => $accounting_withdrawal,
            ],
            'source_transaction' => $charge->id,
        ]);

        return $transfer;
    }

    /**
     * Provides description for withdrawal.
     *
     * @param int $order_id
     * @param int $company_id
     *
     * @return string
     */
    protected function getWithdrawalDescription($order_id, $company_id)
    {
        $lang_code = fn_get_company_language($company_id);

        $description = __(
            'stripe_connect.withdrawal_for_the_order',
            [
                '[order_id]' => $order_id,
            ],
            $lang_code
        );

        return $description;
    }

    protected function getChargeByPaymentIntent(PaymentIntent $payment_intent)
    {
        if (!isset($this->charges_cache[$payment_intent->id])) {
            /** @var \Stripe\Charge[] $charges */
            $charges = $payment_intent->charges->all();
            foreach ($charges as $charge) {
                break;
            }
            $this->charges_cache[$payment_intent->id] = $charge;
        }

        return $this->charges_cache[$payment_intent->id];
    }

    protected function getChargeNet(Charge $charge)
    {
        if (!isset($this->nets_cache[$charge->id])) {
            $balance_transaction = BalanceTransaction::retrieve($charge->balance_transaction);
            $this->nets_cache[$charge->id] = $balance_transaction->net;
        }

        return $this->nets_cache[$charge->id];
    }

    protected function chargeCustomer(array $order_info, Customer $customer, PayoutsManager $payouts_manager)
    {
        $amount = $this->formatAmount($order_info['total']);
        $params = [
            'amount'   => $amount,
            'currency' => $this->processor_params['currency'],
            'customer' => $customer->id,
            'metadata' => [
                'order_id'   => $order_info['order_id'],
                'withdrawal' => 0,
            ],
        ];
        $options = null;

        if ($order_info['company_id'] && empty($order_info['use_gift_certificates'])) {
            $receiver = static::getChargeReceiver($order_info['company_id']);
            list($accounting_withdrawal,, $application_fee) = $this->getWithdrawalAmount($order_info, $payouts_manager);
            $params['application_fee'] = $application_fee;
            $params['metadata']['withdrawal'] = $accounting_withdrawal;

            // payment receiver must be specified in options to perform Direct charge
            $options = ['stripe_account' => $receiver];

            // customer account must be shared to a connected account by converting it into a payment token
            $params['source'] = $this->shareCustomer($customer, $receiver);
            unset($params['customer']);
        }

        $charge = Charge::create($params, $options);

        return $charge;
    }

    /**
     * Creates a customer object to perform charge.
     *
     * @param array $order_info
     *
     * @return \Stripe\Customer
     */
    protected function createCustomer(array $order_info)
    {
        $customer = Customer::create([
            'email'  => $order_info['email'],
            'source' => $order_info['payment_info']['stripe_connect.token'],
        ]);

        return $customer;
    }

    /**
     * Shares customer to a connected vendor account.
     *
     * @param Customer $customer             Stripe customer
     * @param string   $connected_account_id Connected account identifier
     *
     * @return string Payment token
     */
    protected function shareCustomer(Customer $customer, $connected_account_id)
    {
        $token = Token::create(
            ['customer' => $customer->id],
            ['stripe_account' => $connected_account_id]
        );

        return $token->id;
    }
}
