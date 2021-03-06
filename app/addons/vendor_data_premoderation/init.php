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

if (!defined('BOOTSTRAP')) { die('Access denied'); }

fn_register_hooks(
    'get_products',
    'get_product_data',
    ['get_product_data_post', 1600],
    'update_company_pre',
    'get_filters_products_count_query_params',
    'set_admin_notification',
    'clone_product_post',
    'update_product_post',
    'data_feeds_export_before_get_products',
    'dashboard_get_vendors_with_new_products_before_sql_select',
    'dashboard_get_new_products_before_sql_select',
    'get_companies'
);
