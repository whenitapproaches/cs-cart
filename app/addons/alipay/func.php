<?php

function fn_alipay_delete_payment_processors()
{
  db_query("DELETE FROM ?:payment_descriptions WHERE payment_id IN (SELECT payment_id FROM ?:payments WHERE processor_id IN (SELECT processor_id FROM ?:payment_processors WHERE processor_script = 'alipay.php'))");
  db_query("DELETE FROM ?:payments WHERE processor_id IN (SELECT processor_id FROM ?:payment_processors WHERE processor_script = 'alipay.php')");
  db_query("DELETE FROM ?:payment_processors WHERE processor_script = 'alipay.php'");
}

function fn_is_alipay_processor($processor_id = 0)
{
  return (bool) db_get_field("SELECT 1 FROM ?:payment_processors WHERE processor_id = ?i AND addon = ?s", $processor_id, 'alipay');
}

function fn_alipay_get_currencies()
{
  $alipay_currencies = fn_get_schema('alipay', 'currencies');

  $currencies = fn_get_currencies();
  $result = array();

  foreach ($alipay_currencies as $key => &$item) {
    $item['active'] = isset($currencies[$key]);

    $item['name'] = __($item['name']);

    $result[$key] = $item;
  }

  unset($item);

  return $result;
}

function fn_alipay_get_payment_method_types()
{
  $alipay_payment_method_types = fn_get_schema('alipay', 'payment_method_types');

  $result = array();

  foreach ($alipay_payment_method_types as $key => &$item) {
    $item['active'] = isset($payment_method_types[$key]);

    $item['name'] = __($item['name']);

    $result[$key] = $item;
  }

  unset($item);

  return $result;
}

/**
 * Return currency data
 * @param string|int $id
 * @return array|false if no defined return false
 */
function fn_alipay_get_currency($id)
{
    $currencies = fn_alipay_get_currencies();

    if (is_numeric($id)) {
        foreach ($currencies as $currency) {
            if ($currency['id'] == $id) {
                return $currency;
            }
        }
    } elseif (isset($currencies[$id])) {
        return $currencies[$id];
    }

    return false;
}

/**
 * Return valid currency data
 * @param string|int $id
 * @return array
 * ```
 * array(
 *  name => string,
 *  id => int,
 *  active => bool,
 *  code => string
 * )
 * ```
 */
function fn_alipay_get_valid_currency($id)
{
    $currency = fn_alipay_get_currency($id);

    if ($currency === false || !$currency['active']) {
        $currency = fn_alipay_get_currency(CART_PRIMARY_CURRENCY);

        if ($currency === false) {
            $currency = fn_alipay_get_currency('USD');
        }
    }

    return $currency;
}
