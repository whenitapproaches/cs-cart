<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:56
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\addons\product_variations\hooks\products\update_product_popularity.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151189973860bf70d4389b41-08947956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc78a9af007fdf32cd182825628cf71aea82b4d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_popularity.override.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '151189973860bf70d4389b41-08947956',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70d438b672_40399596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70d438b672_40399596')) {function content_60bf70d438b672_40399596($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("popularity")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }?>
<?php }} ?>
