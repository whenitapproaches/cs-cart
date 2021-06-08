<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:57
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\addons\product_variations\hooks\products\update_product_buttons.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67984144660bf70d59f1cf2-82966255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa571eca4cca5d8dda496f86afc38f823202b932' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_buttons.pre.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '67984144660bf70d59f1cf2-82966255',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70d59f42a8_64124637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70d59f42a8_64124637')) {function content_60bf70d59f42a8_64124637($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Type\Type::PRODUCT_TYPE_VARIATION")) {?>
    <?php $_smarty_tpl->tpl_vars['allow_clone'] = new Smarty_variable(false, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['allow_clone'] = clone $_smarty_tpl->tpl_vars['allow_clone'];?>
<?php }?>
<?php }} ?>
