<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:54
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\addons\vendor_data_premoderation\hooks\companies\product_details_fields.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214346947960bf70d24e17e3-42722343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95119a3eff9a965f581c4817bc3b421de2e5050d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\addons\\vendor_data_premoderation\\hooks\\companies\\product_details_fields.post.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '214346947960bf70d24e17e3-42722343',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70d24e8861_68237222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70d24e8861_68237222')) {function content_60bf70d24e8861_68237222($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('approved','yes','pending','no'));
?>
<?php if (fn_allowed_for("MULTIVENDOR")&&($_smarty_tpl->tpl_vars['product_data']->value['company_pre_moderation']=="Y"||$_smarty_tpl->tpl_vars['product_data']->value['company_pre_moderation_edit']=="Y")) {?>
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("approved");?>
:</label>
        <div class="controls">
        	<div class="text-type-value">
        		<?php if ($_smarty_tpl->tpl_vars['product_data']->value['approved']=="Y") {
echo $_smarty_tpl->__("yes");
} elseif ($_smarty_tpl->tpl_vars['product_data']->value['approved']=="P") {
echo $_smarty_tpl->__("pending");
} else {
echo $_smarty_tpl->__("no");
}?>
        	</div>
        </div>
    </div>
<?php }?><?php }} ?>
