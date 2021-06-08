<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:57
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\addons\bestsellers\hooks\products\detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75076133360bf70d565fe96-17282697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b5bb2398306aeab9fb94ab867129c4c255dbeff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\addons\\bestsellers\\hooks\\products\\detailed_content.post.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '75076133360bf70d565fe96-17282697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allow_edit_sales_amount' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70d5665c41_33446305',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70d5665c41_33446305')) {function content_60bf70d5665c41_33446305($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('bestselling','sales_amount'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("bestselling"),'target'=>"#acc_bestsellers"), 0);?>

<div id="acc_bestsellers" class="collapse in <?php if (!$_smarty_tpl->tpl_vars['allow_edit_sales_amount']->value) {?>cm-hide-inputs<?php }?>">
    <div class="control-group">
        <label class="control-label" for="sales_amount"><?php echo $_smarty_tpl->__("sales_amount");?>
</label>
        <div class="controls">
        <input type="text" id="sales_amount" name="product_data[sales_amount]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['sales_amount'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-large" size="10" />
        </div>
    </div>
</div><?php }} ?>
