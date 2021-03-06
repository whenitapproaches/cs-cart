<?php

use Tygh\Registry;
use Tygh\SbpsApplePay;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_REQUEST['order_ids'])) {
        $valid_process = false;

        foreach ($_REQUEST['order_ids'] as $order_id) {
            $sbps = new SbpsApplePay();

            if ($sbps->valid_mode_exec($order_id, $mode, 'credit')) {
                $exec_mode = $mode;

                if (!$valid_process) {
                    $valid_process = true;
                }

                // データ設定
                $sbps->set_data(['order_id' => $order_id, 'processor' => $processor_data['processor_params']]);

                // 処理実行
                $tracking_id = fn_ap_sbps_get_tracking_id($order_id);
                $payment_info = fn_ap_sbps_get_payment_info($order_id, 'applepay');

                // 売上確定、または、部分返金済でキャンセルされた場合、modeを返金用に変更
                if ($exec_mode === 'cancel' && in_array($payment_info['payment_status'], [SBPS_PAYMENT_STATUS_SALES_CONFIRM, SBPS_PAYMENT_STATUS_PARTIAL_REFUNDED])) {
                    $exec_mode = 'refund';
                }

                $sbps->exec_mode_request($exec_mode, $tracking_id, $payment_info);
                if (!empty($sbps->errors)) {
                    fn_set_notification('E', __('error'), __('sbps_error_exec_failed'));
                    $sbps->errors = [];
                } elseif ($exec_mode === 'refund') {
                    // 返金確定要求
                    $this->refund_confirm_request($tracking_id);

                    if (!empty($sbps->errors)) {
                        fn_set_notification('E', __('error'), __('sbps_error_exec_failed'));
                        $sbps->errors = [];
                    }
                }

                // 決済結果参照要求
                $response = $sbps->reference_request($tracking_id);
                if (!empty($sbps->errors) || $response['res_status'] !== '0') {
                    fn_set_notification('W', __('warning'), __('sbps_warning_reference_failed'));
                } else {
                    $info = $sbps->format_reference($response['res_pay_method_info']);
                    fn_ap_sbps_set_sbps_payment_info($order_id, $info, 'applepay');
                    fn_ap_sbps_set_order_data($order_id, $info, 'applepay');
                }
            }
        }

        if (!$valid_process) {
            fn_set_notification('W', __('warning'), __('sbps_error_exec_data_not_exists'));
        }
    }

    return [CONTROLLER_STATUS_OK];
}

$params = $_REQUEST;

if ($mode === 'manage' || empty($_REQUEST['order_id'])) {
    $params['check_for_suppliers'] = true;
    $params['company_name'] = true;
    list($orders, $search, $totals) = fn_get_orders($params, Registry::get('settings.Appearance.admin_orders_per_page'), true);

    Registry::get('view')->assign('orders', $orders);
    Registry::get('view')->assign('search', $search);
} else {
    $sbps = new SbpsApplePay();
    $order_id = $_REQUEST['order_id'];

    if ($sbps->valid_mode_exec($order_id, $mode, 'credit')) {
        $exec_mode = $mode;

        // 処理実行
        $tracking_id = fn_ap_sbps_get_tracking_id($order_id);
        $payment_info = fn_ap_sbps_get_payment_info($order_id, 'applepay');

        $sbps->exec_mode_request($exec_mode, $tracking_id, $payment_info);
        if (!empty($sbps->errors)) {
            fn_set_notification('E', __('error'), __('sbps_error_exec_failed'));
            $sbps->errors = [];
        } elseif ($exec_mode === 'refund') {
            // 返金確定要求
            $this->refund_confirm_request($tracking_id);

            if (!empty($sbps->errors)) {
                fn_set_notification('E', __('error'), __('sbps_error_exec_failed'));
                $sbps->errors = [];
            }
        }

        // 決済結果参照要求
        $response = $sbps->reference_request($tracking_id);
        if (!empty($sbps->errors) || $response['res_status'] !== '0') {
            fn_set_notification('W', __('warning'), __('sbps_warning_reference_failed'));
        } else {
            $info = $sbps->format_reference($response['res_pay_method_info']);
            fn_ap_sbps_set_sbps_payment_info($order_id, $info, 'applepay');
            fn_ap_sbps_set_order_data($order_id, $info, 'applepay');
        }
    }

    return [CONTROLLER_STATUS_OK];
}