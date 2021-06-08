<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 18:15:07
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\addons\alipay\views\payments\components\cc_processors\alipay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87928606360bf331b1872d5-87950995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4c9603814f415b48a298c5f9a9c7905a64cb4e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\addons\\alipay\\views\\payments\\components\\cc_processors\\alipay.tpl',
      1 => 1623143676,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '87928606360bf331b1872d5-87950995',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf331b1b47f1_36965452',
  'variables' => 
  array (
    'addons' => 0,
    'alipay_currencies' => 0,
    'currency' => 0,
    'processor_params' => 0,
    'alipay_payment_method_types' => 0,
    'payment_method_type_key' => 0,
    'payment_method_type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf331b1b47f1_36965452')) {function content_60bf331b1b47f1_36965452($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('alipay.addon_is_disabled_notice','currency','payment_method_type','test_live_mode','test','live'));
?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['alipay']['status']=="D") {?>
    <div class="alert alert-block">
	<p><?php echo $_smarty_tpl->__("alipay.addon_is_disabled_notice");?>
</p>
    </div>
<?php } else { ?>

<div class="control-group">
    <label class="control-label" for="currency"><?php echo $_smarty_tpl->__("currency");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][currency]" id="currency">
            <?php  $_smarty_tpl->tpl_vars["currency"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["currency"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alipay_currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["currency"]->key => $_smarty_tpl->tpl_vars["currency"]->value) {
$_smarty_tpl->tpl_vars["currency"]->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['code'], ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['currency']->value['active']) {?> disabled="disabled"<?php }
if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']==$_smarty_tpl->tpl_vars['currency']->value['code']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="currency"><?php echo $_smarty_tpl->__("payment_method_type");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][payment_method_type]" id="payment_method_type">
            <?php  $_smarty_tpl->tpl_vars["payment_method_type"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["payment_method_type"]->_loop = false;
 $_smarty_tpl->tpl_vars["payment_method_type_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['alipay_payment_method_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["payment_method_type"]->key => $_smarty_tpl->tpl_vars["payment_method_type"]->value) {
$_smarty_tpl->tpl_vars["payment_method_type"]->_loop = true;
 $_smarty_tpl->tpl_vars["payment_method_type_key"]->value = $_smarty_tpl->tpl_vars["payment_method_type"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_method_type_key']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['payment_method_type']==$_smarty_tpl->tpl_vars['payment_method_type_key']->value) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_method_type']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>
    </div>
</div>

<div id="section_technical_details">
    <div class="control-group">
        <label class="control-label" for="mode"><?php echo $_smarty_tpl->__("test_live_mode");?>
:</label>
        <div class="controls">
            <select name="payment_data[processor_params][mode]" id="mode">
                <option value="test" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['mode']=="test") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("test");?>
</option>
                <option value="live" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['mode']=="live") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("live");?>
</option>
            </select>
        </div>
    </div>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>

<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
