<?php /* Smarty version Smarty-3.1.21, created on 2021-06-04 11:08:01
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\addons\vendor_data_premoderation\hooks\index\dashboard_new_products_link.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152169721060b98b01c8bdf8-87296289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5736e0f97b5f203970e5403cf85f4801f40e9ed4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\addons\\vendor_data_premoderation\\hooks\\index\\dashboard_new_products_link.post.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '152169721060b98b01c8bdf8-87296289',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b98b01ca5274_79302669',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b98b01ca5274_79302669')) {function content_60b98b01ca5274_79302669($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['url']->value)."&approval_status=Y", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['url'] = clone $_smarty_tpl->tpl_vars['url'];?>
<?php }} ?>
