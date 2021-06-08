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

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    return array(CONTROLLER_STATUS_OK);
}

if ($mode == 'update' && fn_allowed_for('MULTIVENDOR') && defined('AJAX_REQUEST')) {
    $discussion = fn_get_discussion($_REQUEST['product_id'], 'P', true, $_REQUEST);

    if (!empty($discussion) && $discussion['type'] != 'D') {
        if (fn_allowed_for('MULTIVENDOR') || fn_allowed_for('ULTIMATE') && Registry::get('runtime.company_id')) {
            Registry::set('navigation.tabs.discussion', array(
                'title' => __('discussion_title_product'),
                'js'    => true
            ));

            Tygh::$app['view']->assign('discussion', $discussion);
        }
    }
}