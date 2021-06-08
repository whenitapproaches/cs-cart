<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:30:05
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\views\order_management\components\discounts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63459391860bf70dddb0351-40629928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9fa65f90fb7df3d7722dc38f4013886619a3915' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\views\\order_management\\components\\discounts.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '63459391860bf70dddb0351-40629928',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70dddb1c78_75780547',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70dddb1c78_75780547')) {function content_60bf70dddb1c78_75780547($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('discounts','discount_coupon_code'));
?>
<div class="orders-discounts">
	<h4><?php echo $_smarty_tpl->__("discounts");?>
</h4>
	<div class="orders-discount">
	    <input type="text" name="coupon_code" placeholder="<?php echo $_smarty_tpl->__("discount_coupon_code");?>
" id="coupon_code" class="input-text-large" size="30" value="" />
	</div>
</div><?php }} ?>
