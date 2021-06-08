<?php

if ($mode == 'processor') {
  $processor_id = null;
  if (isset($_REQUEST['processor_id'])) {
      $processor_id = $_REQUEST['processor_id'];
  } elseif (isset($_REQUEST['payment_id'])) {
      $payment = fn_get_payment_method_data($_REQUEST['payment_id']);
      if (isset($payment['processor_id'])) {
          $processor_id = $payment['processor_id'];
      }
  }
  
  $is_alipay_processor = false;
  if ($processor_id !== null) {
    $is_alipay_processor = fn_is_alipay_processor($processor_id);

  }

  if ($is_alipay_processor) {
      /** @var string $processor_script */
      $processor_script = db_get_field(
          'SELECT processor_script FROM ?:payment_processors'
          . ' WHERE processor_id = ?i',
          $processor_id
      );

      $alipay_currencies = fn_alipay_get_currencies();

      $payment_method_types = fn_alipay_get_payment_method_types();

      /** @var \Tygh\SmartyEngine\Core $view */
      $view = Tygh::$app['view'];

      $view->assign('alipay_currencies', $alipay_currencies);

      $view->assign('alipay_payment_method_types', $payment_method_types);
  }
}