<?php
/***************************************************************************
*                                                                          *
*    Copyright (c) 2004 Simbirsk Technologies Ltd. All rights reserved.    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

// $Id: sonys_card_info.php by takahashi from cs-cart.jp 2019

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

$params = $_REQUEST;

if ($mode == 'view') {

    $params['user_id'] = $auth['user_id'];

	// パン屑リストを生成
	fn_add_breadcrumb(__('jp_sonys_subpay_list'));

    // 定期購入ステータス
    $subsc_status = array(
        'A'	=>	__('jp_sonys_subsc_status_a'),
        'P'	=>	__('jp_sonys_subsc_status_p'),
        'D'	=>	__('jp_sonys_subsc_status_d'),
    );

    $subscriptions = array();

    // 定期購入の数を取得
    $sonys_subsc_total = db_get_field("SELECT COUNT(*) FROM ?:jp_sonys_subsc_manager WHERE user_id = ?i", $params['user_id']);

    // 定期購入で決済した注文が存在する場合
    if( !empty($sonys_subsc_total) ){
        // 定期購入の情報を抽出
        list($subscriptions, $search) = fn_get_sonys_subsc_data($params);
    }

    Registry::get('view')->assign('subscriptions', $subscriptions);
    Registry::get('view')->assign('search', $search);
    Registry::get('view')->assign('subsc_status', $subsc_status);

} elseif ($mode == 'status_update' ) {
    // ステータスを変更
    fn_sonys_subsc_status_update($params['subpay_id'], $params['status_to']);
    fn_set_notification('N', __('notice'), __('jp_sonys_subsc_status_update', array("[subpay_id]"=>$params['subpay_id'], "[status]"=>__("jp_sonys_subsc_status_" . strtolower($params['status_to'])))));

    return array(CONTROLLER_STATUS_REDIRECT, "sonys_subpay_list.view");
}