<?php
/***************************************************************************
*                                                                          *
*    Copyright (c) 2009 Simbirsk Technologies Ltd. All rights reserved.    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

// $Id: orders.pre.php by ari from cs-cart.jp 2015
// 日本語に対応したPDF納品書を出力
// Modified to fix bug by takahashi from cs-cart.jp 2017
// 英語の注文を注文詳細から納品書（PDF)を印刷をすると注文書が作られるバグを修正

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

// 注文詳細ページでの印刷
if ($mode == 'print_invoice') {

	if (!empty($_REQUEST['order_id'])) {

		$order_info = fn_get_order_info($_REQUEST['order_id']);
		
		if (empty($order_info)) {
			return array(CONTROLLER_STATUS_NO_PAGE);
		}
        //////////////////////////////////////////////////////////////////////////////////////////
        // Modified to fix bug by takahashi from cs-cart.jp 2017 BOF
        // 英語の注文を注文詳細から納品書（PDF)を印刷をすると注文書が作られるバグを修正
        //////////////////////////////////////////////////////////////////////////////////////////
		//if(strtolower($order_info['lang_code']) == 'ja') {
			if (!empty($_REQUEST['format']) && $_REQUEST['format'] == 'pdf') {
				fn_lcjp_print_pdf_invoice($_REQUEST['order_id']);
				exit;
			}
		//}
        //////////////////////////////////////////////////////////////////////////////////////////
        // Modified to fix bug by takahashi from cs-cart.jp 2017 EOF
        //////////////////////////////////////////////////////////////////////////////////////////
	}
}




// 注文一覧ページでの一括印刷
if ($mode == 'bulk_print' && !empty($_REQUEST['order_ids']) && Registry::get('runtime.dispatch_extra') == 'pdf') {
	fn_lcjp_print_pdf_invoice($_REQUEST['order_ids']);
	exit;
}
