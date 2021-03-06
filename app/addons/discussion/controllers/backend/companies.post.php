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

// Modified for Japanese version by takahashi from cs-cart.jp 2018

use Tygh\Enum\Addons\Discussion\DiscussionObjectTypes;
use Tygh\Enum\Addons\Discussion\DiscussionTypes;
use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($mode == 'update') {
        if (!empty($_REQUEST['posts']) && fn_discussion_check_update_posts_permission($_REQUEST['posts'], $auth)) {
            fn_update_discussion_posts($_REQUEST['posts']);
        }
    }

    return;
}

if ($mode == 'update') {
    if (!fn_allowed_for('ULTIMATE')) {

        $discussion = fn_get_discussion($_REQUEST['company_id'], DiscussionObjectTypes::COMPANY, true, $_REQUEST);

        if (!empty($discussion) &&
            $discussion['type'] !== DiscussionTypes::TYPE_DISABLED &&
            fn_check_permissions('discussion', 'view', 'admin')
        ) {
            Registry::set('navigation.tabs.discussion', [
                ///////////////////////////////////////////////////////////////
                // Modified for Japanese version by takahashi from cs-cart.jp 2018 BOF
                // ???????????????????????????????????? jp_review ?????????
                ///////////////////////////////////////////////////////////////
                'title' => CART_LANGUAGE == "ja" ? __("jp_review") : __('discussion_title_company'),
                ///////////////////////////////////////////////////////////////
                // Modified for Japanese version by takahashi from cs-cart.jp 2018 EOF
                ///////////////////////////////////////////////////////////////
                'js'    => true,
            ]);

            Tygh::$app['view']->assign('discussion', $discussion);
        }
    }
}
