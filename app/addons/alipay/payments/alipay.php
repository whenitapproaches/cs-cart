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

/**
 * @var array $processor_data
 * @var array $order_info
 * @var string $mode
 */

use Tygh\Http;

if (!defined('BOOTSTRAP')) {
  die('Access denied');
}

// Return from paypal website
if (defined('PAYMENT_NOTIFICATION')) {
} else {
  $currency = fn_alipay_get_valid_currency($processor_data['processor_params']['currency']);

  $alipay_currency = $currency['code'];

  if ($processor_data['processor_params']['mode'] === 'test') {
    $alipay_url = 'https://open-global.alipay.com/ams/sandbox/api/v1/payments/pay';
  } else {
    // To be updated when Alipay goes live
    $alipay_url = '';
  }

  $notify_url = fn_url("payment_notification.notify?payment=alipay&order_id={$order_id}", AREA, 'current');
  $redirect_url = fn_url("orders.detail?order_id={$order_id}");

  $alipay_total = fn_format_price_by_currency($order_info['total'], CART_PRIMARY_CURRENCY, $alipay_currency);

  $timestamp = time();

  $post_data = [
    'order' => array(
      'orderAmount' => array(
        'currency' => "PHP",
        "value" => $alipay_total
      ),
      'orderDescription' => 'Some description',
      'referenceOrderId' => 'ORDER_' . $timestamp,
      "env" => array(
        "osType" => "ANDROID",
        "terminalType" => "WAP"
      )
    ),
    'paymentMethod' => array(
      'paymentMethodType' => $processor_data['processor_params']['payment_method_type']
    ),
    "paymentAmount" => array(
      "currency" => "PHP",
      "value" => $alipay_total
    ),
    'paymentRedirectUrl' => $redirect_url,
    'paymentNotifyUrl' => $notify_url,
    "paymentRequestId" => "REQUEST_" . $timestamp,
    "productCode" => "CASHIER_PAYMENT"
  ];

  $http_method = 'POST';

  $client_id = 'SANDBOX_5Y342C2Y98PY05145';

  $private_key = <<<EOD
-----BEGIN RSA PRIVATE KEY-----
MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQC0rjEKhLZP9R7pU2v7xHFBO05vHR40InRlOBtmGuMMGpJfpwH4usrYxBrlEu1e5LcNk3J3QuK1cZ1x6vE+u9elknOAf74i5/XW0Pxk9R44SGaxXZZntJmdaufYFZ73YFVIpyMNKjAenqDfXA2/e72R9uODXOiNgjE9T/WSWcLwORdpMSjV67zFNqMFWY6ktQk1kcgcSruVMhZs7+IjpK6VkdoQY1Bx/vGvDjLQjHjfke6hIg0x7WhtDA1bppM7E/uBt7kx988QkT4NAA+ino9vlPPbQFkq7Zm1AswrtHeKhKm1Y/1Fj0JYXDhEe3xx+I8qHPJr6IfNhxsfQyjJqF6fAgMBAAECggEBAIZbGgC2W1Pt9QSQkjXwCD/3uAWMY49lJ6S1KjqtN7UidUJH0IGDdZ/nhBBgGL992FlyEaZ5yFggmnHBwY9i46Mt2lHtrBgM4ZTSZz0zwTsdK7As5dFMTQbwHmNjAIj3y7NxBfGeM5YxY3N04oxHmdpW+ywOBKhl7fOn5/biZMF4kket16rXmM0HyDq0s4VtYvK5FZcgoJ5peCbNsrbOodpg43+1UJYzEHhWiiUSTEzVveGARxLPbmB9hwcLxNfqaIuHaxaKQX0V6FZS/XAX7imQ8qoCrIP99x7u/AOKrbB+SsQgMdNBT20uUS6uiFdI0Gw55Rj3zBUT8R3ojzAozVECgYEA5hbQqMhTBUNIKVT4u5hELoa5aa51joKKT4W38YTFfqHW0XJejZP8OQl5PCi32/0mhw+2ZFGpjhUDQSJ4iuFX46MP1ninhrKI/AL/7Mou5BrfB8ohndIVCGB3ZGaVoNl8nxcrgeSkacNlYdkAdp57QvSC/djlpR0BcWV+v7Y1P0sCgYEAyQb8M+blcbEZuNPaJYqHe3IGlUpSPbAbyAlSYtbcntET76mPeHSoffv/wSvo5zrDrs2DnECqYqY4egATUQBSbo4gnhPrwCD5d/G204+3h287g+/PF+7b2ajQDqJc6YXMnOQcsZ0O7jtxnpM8n0ck4XEbE+tviH2m4clZbrbEBX0CgYApEAlNFfM7DTbjqXZ6hEImy4Rrh+cS99kXOBYL1FYqs1dTKcYWHkL1KuuoANxPNm6ZzAQRA0HvSXC7PxukLXMx/PfmnsHHGDW6RA7Ig4y6yNDk4v383HFEfXLRSD2L50SGX+wz0kpFVcnSHJgok0AMQvbdtsfFH9gSFLr6G9qE4QKBgQCOrfGFGQWSyyM5hsvXR1pfqI+5mDWE6SDeupcJ5fxSkIy41r0ovov0V06wGW1F6PSIdf9KgK8uM1H0bWdIX5UiOKg36mWySPUnR5z+zYtyieVRAH0ZPIQ4GVQKfvy5Fiki1djzy0iUmAZNia1GU2V+yRtx6PGRi7VNne5m4TuBtQKBgH146XUsaUdNfrZv3HSbprVoaW2+abEW9j5qxOl0OaPUIwCaJnSX8+E9EIbZJGIPHcOtn1NO4hwwyU+X34aT0XlYSU72qS1KC9pJ7eC/JpdpD4r1QnOnPLpPGy047Zcc3iOv+emxWQLkRc44xIg8mVeJtoXpRxdKmutC1qwOEsV6
-----END RSA PRIVATE KEY-----
EOD;

  $request_time_str = date('c'); // ISO 8601 date

  $path = parse_url($alipay_url)['path'];

  $request_body = json_encode($post_data);

  $unsigned_content = $http_method . " " . $path . "\n" . $client_id . "." . $request_time_str . "." . $request_body;

  $binary_signature = '';

  openssl_sign($unsigned_content, $binary_signature, $private_key, 'SHA256');

  $signature = urlencode(base64_encode($binary_signature));

  $extra = array(
    'headers' => array(
      'Content-Type: application/json',
      "Request-Time: {$request_time_str}",
      "client-id: {$client_id}",
      "Signature: algorithm=RSA256,keyVersion=1,signature={$signature}",
    )
  );

  $__response = Http::post($alipay_url, $request_body, $extra);
  
  if (!empty($__response)) {
    $response = json_decode($__response, true);

    $payment_action_form = json_decode($response['paymentActionForm'], true);

    $method = $payment_action_form['method'];

    $submit_url = $payment_action_form['redirectUrl'];

    fn_create_payment_form($submit_url, $response, 'Alipay server', false, $method, false);
  }
}
