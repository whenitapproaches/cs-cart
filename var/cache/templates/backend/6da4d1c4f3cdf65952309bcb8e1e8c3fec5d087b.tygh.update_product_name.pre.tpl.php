<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:54
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\addons\product_variations\hooks\products\update_product_name.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61747213760bf70d2187d62-80656775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6da4d1c4f3cdf65952309bcb8e1e8c3fec5d087b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_name.pre.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '61747213760bf70d2187d62-80656775',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parent_product_data' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70d218b647_97477383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70d218b647_97477383')) {function content_60bf70d218b647_97477383($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.variation_of_product'));
?>
<?php if ($_smarty_tpl->tpl_vars['parent_product_data']->value) {?>
    <div class="control-group">
        <div class="controls">
            <p>
                <?php echo $_smarty_tpl->__("product_variations.variation_of_product",array("[url]"=>fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['parent_product_id'])),"[product]"=>$_smarty_tpl->tpl_vars['parent_product_data']->value['variation_name']));?>

            </p>
        </div>
    </div>
<?php }?><?php }} ?>
