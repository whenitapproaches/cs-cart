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

use Tygh\Addons\StripeConnect\Payments\StripeConnect;

defined('BOOTSTRAP') or die('Access denied');

if ($_SERVER['REQUEST_METHOD'] === 'POST'
    && $mode === 'check_confirmation'
) {
    /** @var \Tygh\Ajax $ajax */
    $ajax = Tygh::$app['ajax'];
    /** @var array $cart */
    $cart = Tygh::$app['session']['cart'];

    $total = $cart['total'];
    if (!empty($cart['payment_surcharge'])) {
        $total += $cart['payment_surcharge'];
    }

    $params = array_merge([
        'payment_intent_id' => null,
    ], $_REQUEST);

    $processor = new StripeConnect(
        $cart['payment_id'],
        Tygh::$app['db'],
        Tygh::$app['addons.stripe_connect.price_formatter'],
        Tygh::$app['addons.stripe_connect.settings']
    );

    $confirmation_result = $processor->getPaymentConfirmationDetails($params['payment_intent_id'], $total);

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
