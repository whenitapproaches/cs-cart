<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 14:07:58
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\views\payments\components\cc_processors\sagepay_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129634242260befb2e870521-48059251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fd5a9352bc69f213654ae1461b93490b9443158' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\views\\payments\\components\\cc_processors\\sagepay_form.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '129634242260befb2e870521-48059251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'processor_params' => 0,
    'sagepay_currencies' => 0,
    'currency' => 0,
    'currencies' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60befb2e8c91a6_93662705',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60befb2e8c91a6_93662705')) {function content_60befb2e8c91a6_93662705($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_sagepay_notice','vendor_name_field','encryption','password','order_prefix','transaction_type','test_live_mode','test','live','currency','currency_code_'));
?>
<?php $_smarty_tpl->tpl_vars['sagepay_currencies'] = new Smarty_variable(array("GBP","EUR","USD"), null, 0);?>

<p><?php echo $_smarty_tpl->__("text_sagepay_notice");?>
</p>
<hr>

<div class="control-group">
    <label class="control-label" for="vendor"><?php echo $_smarty_tpl->__("vendor_name_field");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][vendor]" id="vendor" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['vendor'], ENT_QUOTES, 'UTF-8');?>
"  size="60">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="password"><?php echo $_smarty_tpl->__("encryption");?>
 <?php echo $_smarty_tpl->__("password");?>
:</label>
    <div class="controls">
        <input type="password" name="payment_data[processor_params][password]" id="password" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['password'], ENT_QUOTES, 'UTF-8');?>
"  size="60">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="order_prefix"><?php echo $_smarty_tpl->__("order_prefix");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][order_prefix]" id="order_prefix" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['order_prefix'], ENT_QUOTES, 'UTF-8');?>
"  size="60">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="transaction_type"><?php echo $_smarty_tpl->__("transaction_type");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][transaction_type]" id="transaction_type">
            <option value="PAYMENT" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['transaction_type']=="PAYMENT") {?>selected="selected"<?php }?>>PAYMENT</option>
            <option value="DEFERRED" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['transaction_type']=="DEFERRED") {?>selected="selected"<?php }?>>DEFERRED</option>
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="testmode"><?php echo $_smarty_tpl->__("test_live_mode");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][testmode]" id="testmode">
            <option value="Y" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['testmode']=="Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("test");?>
</option>
            <option value="N" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['testmode']=="N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("live");?>
</option>
            <option value="S" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['testmode']=="S") {?>selected="selected"<?php }?>>DEV</option>
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="currency"><?php echo $_smarty_tpl->__("currency");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][currency]" id="currency">
            <?php  $_smarty_tpl->tpl_vars["currency"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["currency"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sagepay_currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["currency"]->key => $_smarty_tpl->tpl_vars["currency"]->value) {
$_smarty_tpl->tpl_vars["currency"]->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['currency']->value]) {?> disabled="disabled"<?php }
if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']==$_smarty_tpl->tpl_vars['currency']->value) {?> selected="selected"<?php }?>><?php ob_start();
echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['currency']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->__("currency_code_".$_tmp1);?>
</option>
            <?php } ?>
        </select>
    </div>
</div><?php }} ?>
