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
// Modified for Japanese version by takahashi from cs-cart.jp 2020
// CVVが間違った場合に注文を確定するボタンが押せないバグをFIX

use Tygh\Addons\Stripe\Payments\Stripe;
/////////////////////////////////////////////////////////////////////
// Modified for Japanese version by takahashi from cs-cart.jp 2020 BOF
// CVVが間違った場合に注文を確定するボタンが押せないバグをFIX
/////////////////////////////////////////////////////////////////////
use Tygh\Common\OperationResult;
/////////////////////////////////////////////////////////////////////
// Modified for Japanese version by takahashi from cs-cart.jp 2020 EOF
/////////////////////////////////////////////////////////////////////

defined('BOOTSTRAP') or die('Access denied');

if ($_SERVER['REQUEST_METHOD'] === 'POST'
    && $mode === 'check_confirmation'
) {
    /** @var \Tygh\Ajax $ajax */
    $ajax = Tygh::$app['ajax'];

    $params = array_merge([
        'total'             => null,
        'payment_id'        => null,
        'payment_intent_id' => null,
        'email'             => null,
    ], $_REQUEST);

    if ($params['email']) {
        $user_id = empty(Tygh::$app['session']['auth']['user_id'])
            ? 0
            : Tygh::$app['session']['auth']['user_id'];
        if (fn_is_user_exists($user_id, $params)) {
            $ajax->assign('error', [
                'message' => __('error_user_exists')
            ]);
            exit;
        }
    }

    $total = 0;
    if ($action === 'instant_payment') {
        $total = $params['total'];
    } else {
        $total = Tygh::$app['session']['cart']['total'];
        if (!empty(Tygh::$app['session']['cart']['payment_surcharge'])) {
            $total = Tygh::$app['session']['cart']['payment_surcharge'];
        }
    }

    $payment_id = $action === 'instant_payment'
        ? $params['payment_id']
        : Tygh::$app['session']['cart']['payment_id'];

    $processor = new Stripe(
        $payment_id,
        Tygh::$app['db'],
        Tygh::$app['addons.stripe.price_formatter']
    );

    /////////////////////////////////////////////////////////////////////
    // Modified for Japanese version by takahashi from cs-cart.jp 2020 BOF
    // CVVが間違った場合に注文を確定するボタンが押せないバグをFIX
    /////////////////////////////////////////////////////////////////////
    $confirmation_result = new OperationResult(false);
    try {
        $confirmation_result = $processor->getPaymentConfirmationDetails($params['payment_intent_id'], $total);
    } catch (Exception $e) {
        fn_log_event('general', 'runtime', [
            'message' => __('stripe.payment_intent_error', [
                '[payment_id]' => $payment_id,
                '[error]' => $e->getMessage(),
            ]),
        ]);
    }
    /////////////////////////////////////////////////////////////////////
    // Modified for Japanese version by takahashi from cs-cart.jp 2020 EOF
    /////////////////////////////////////////////////////////////////////

    if ($confirmation_result->isSuccess()) {
        foreach ($confirmation_result->getData() as $field => $value) {
            $ajax->assign($field, $value);
        }
    } else {
        $ajax->assign('error', [
            'message' => __('text_order_placed_error'),
        ]);
    }
    exit;
}

return [CONTROLLER_STATUS_NO_PAGE];
