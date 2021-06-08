<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 11:35:53
         compiled from "C:\xampp\htdocs\cs-jp\design\themes\responsive\templates\views\checkout\components\customer\billing.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109563775060bed789df6444-55357302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b82ad9796ebf8f8837d525bb6f3b752b9f25c44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\themes\\responsive\\templates\\views\\checkout\\components\\customer\\billing.tpl',
      1 => 1622772465,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '109563775060bed789df6444-55357302',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'user_data' => 0,
    'use_billing_address' => 0,
    'profile_fields' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bed789e17824_30316691',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bed789e17824_30316691')) {function content_60bed789e17824_30316691($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_billing_address_is_different_from_shipping','text_billing_address_is_different_from_shipping'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="litecheckout__group">
    <div class="litecheckout__item" style="width: 100%;">
        <?php $_smarty_tpl->tpl_vars['use_billing_address'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['user_data']->value['ship_to_another'])===null||$tmp==='' ? false : $tmp), null, 0);?>

        <div class="ty-profile-field__switch ty-address-switch clearfix litecheckout__address-switch">
            <div class="ty-profile-field__switch-label"><label for="sw_billing_address_suffix_no"><?php echo $_smarty_tpl->__("text_billing_address_is_different_from_shipping");?>
</label></div>
            <div class="ty-profile-field__switch-actions">
                <input
                    type="hidden"
                    value="0"
                    name="ship_to_another"
                    data-ca-lite-checkout-field="ship_to_another"
                    data-ca-lite-checkout-auto-save-on-change="true"
                >
                <input
                    type="hidden"
                    value="0"
                    name="user_data[ship_to_another]"
                    data-ca-lite-checkout-field="user_data.ship_to_another"
                    data-ca-lite-checkout-auto-save-on-change="true"
                >
                <input
                    id="sw_billing_address_suffix_no"
                    type="checkbox"
                    value="1"
                    name="user_data[ship_to_another]"
                    data-ca-lite-checkout-field="user_data.ship_to_another"
                    data-ca-lite-checkout-auto-save-on-change="true"
                    <?php if ($_smarty_tpl->tpl_vars['use_billing_address']->value) {?>checked="checked"<?php }?>
                    class="checkbox cm-switch-availability cm-switch-visibility"
                >
            </div>
        </div>
    </div>
</div>

<div id="billing_address" class="litecheckout__container <?php if (!$_smarty_tpl->tpl_vars['use_billing_address']->value) {?>hidden<?php }?>">
    <div class="litecheckout__group">
        <input
            type="hidden"
            value="1"
            name="ship_to_another"
            data-ca-lite-checkout-field="ship_to_another"
            data-ca-lite-checkout-auto-save-on-change="true"
            <?php if (!$_smarty_tpl->tpl_vars['use_billing_address']->value) {?>disabled="disabled"<?php }?>
        >
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('profile_fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value,'disable_all_fields'=>!$_smarty_tpl->tpl_vars['use_billing_address']->value,'section'=>smarty_modifier_enum("ProfileFieldSections::BILLING_ADDRESS"),'exclude'=>array("customer_notes")), 0);?>

    </div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/customer/billing.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/customer/billing.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="litecheckout__group">
    <div class="litecheckout__item" style="width: 100%;">
        <?php $_smarty_tpl->tpl_vars['use_billing_address'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['user_data']->value['ship_to_another'])===null||$tmp==='' ? false : $tmp), null, 0);?>

        <div class="ty-profile-field__switch ty-address-switch clearfix litecheckout__address-switch">
            <div class="ty-profile-field__switch-label"><label for="sw_billing_address_suffix_no"><?php echo $_smarty_tpl->__("text_billing_address_is_different_from_shipping");?>
</label></div>
            <div class="ty-profile-field__switch-actions">
                <input
                    type="hidden"
                    value="0"
                    name="ship_to_another"
                    data-ca-lite-checkout-field="ship_to_another"
                    data-ca-lite-checkout-auto-save-on-change="true"
                >
                <input
                    type="hidden"
                    value="0"
                    name="user_data[ship_to_another]"
                    data-ca-lite-checkout-field="user_data.ship_to_another"
                    data-ca-lite-checkout-auto-save-on-change="true"
                >
                <input
                    id="sw_billing_address_suffix_no"
                    type="checkbox"
                    value="1"
                    name="user_data[ship_to_another]"
                    data-ca-lite-checkout-field="user_data.ship_to_another"
                    data-ca-lite-checkout-auto-save-on-change="true"
                    <?php if ($_smarty_tpl->tpl_vars['use_billing_address']->value) {?>checked="checked"<?php }?>
                    class="checkbox cm-switch-availability cm-switch-visibility"
                >
            </div>
        </div>
    </div>
</div>

<div id="billing_address" class="litecheckout__container <?php if (!$_smarty_tpl->tpl_vars['use_billing_address']->value) {?>hidden<?php }?>">
    <div class="litecheckout__group">
        <input
            type="hidden"
            value="1"
            name="ship_to_another"
            data-ca-lite-checkout-field="ship_to_another"
            data-ca-lite-checkout-auto-save-on-change="true"
            <?php if (!$_smarty_tpl->tpl_vars['use_billing_address']->value) {?>disabled="disabled"<?php }?>
        >
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('profile_fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value,'disable_all_fields'=>!$_smarty_tpl->tpl_vars['use_billing_address']->value,'section'=>smarty_modifier_enum("ProfileFieldSections::BILLING_ADDRESS"),'exclude'=>array("customer_notes")), 0);?>

    </div>
</div>
<?php }?><?php }} ?>
