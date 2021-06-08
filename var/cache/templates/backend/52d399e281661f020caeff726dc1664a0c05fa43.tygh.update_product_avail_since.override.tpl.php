<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:55
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\addons\product_variations\hooks\products\update_product_avail_since.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13080192860bf70d3eaee83-15537644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52d399e281661f020caeff726dc1664a0c05fa43' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_avail_since.override.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13080192860bf70d3eaee83-15537644',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70d3eb0900_47977204',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70d3eb0900_47977204')) {function content_60bf70d3eb0900_47977204($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("avail_since")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }?>
<?php }} ?>
