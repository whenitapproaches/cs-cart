<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:15
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\addons\vendor_data_premoderation\hooks\index\dashboard_new_products_link.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140623607360bf70aba9c6f9-26161498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '140623607360bf70aba9c6f9-26161498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70aba9e5a5_15608955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70aba9e5a5_15608955')) {function content_60bf70aba9e5a5_15608955($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['url']->value)."&approval_status=Y", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['url'] = clone $_smarty_tpl->tpl_vars['url'];?>
<?php }} ?>
