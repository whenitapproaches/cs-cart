<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 18:10:23
         compiled from "C:\xampp\htdocs\cs-jp\design\themes\responsive\templates\blocks\grid_wrappers\lite_checkout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152568619560bf33ff409580-24801694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaff4073772373d7c74494d8f14516c4db4e6096' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\themes\\responsive\\templates\\blocks\\grid_wrappers\\lite_checkout.tpl',
      1 => 1622772464,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '152568619560bf33ff409580-24801694',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
    'settings' => 0,
    'location_data' => 0,
    'grid' => 0,
    'content' => 0,
    'payment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf33ff423611_33235837',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf33ff423611_33235837')) {function content_60bf33ff423611_33235837($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sign_in','checkout','sign_in','checkout'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/tygh/checkout.js"),$_smarty_tpl);?>
 
<?php echo smarty_function_script(array('src'=>"js/tygh/checkout/lite_checkout.js"),$_smarty_tpl);?>
 
<?php echo smarty_function_script(array('src'=>"js/tygh/checkout/pickup_selector.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/checkout/pickup_search.js"),$_smarty_tpl);?>



<?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Security']['secure_storefront']!="partial") {?>
        <div id="litecheckout_login_block" class="hidden" title="<?php echo $_smarty_tpl->__("sign_in");?>
">
            <div class="ty-login-popup">
                <?php echo $_smarty_tpl->getSubTemplate ("views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"popup",'id'=>"litecheckout_login_block_inner"), 0);?>

            </div>
        </div>
    <?php }?>
<?php }?>

<div class="litecheckout litecheckout__form" id="litecheckout_form">
    <h1 class="litecheckout__page-title"><?php echo $_smarty_tpl->__("checkout");?>
</h1>
    <div data-ca-lite-checkout-element="form">
        <form name="litecheckout_payments_form"
            id="litecheckout_payments_form"
            action="<?php echo htmlspecialchars(fn_url("checkout.place_order"), ENT_QUOTES, 'UTF-8');?>
"
            method="post"
            data-ca-lite-checkout-element="checkout-form"
            data-ca-lite-checkout-ready-for-checkout="false"
            class="litecheckout__payment-methods"
        >
            <input
                type="hidden"
                value="1"
                name="ship_to_another"
                data-ca-lite-checkout-field="ship_to_another"
                data-ca-lite-checkout-auto-save-on-change="true"
            >
            <div
                class="litecheckout__group"
                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']&&$_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
                    data-ca-block-manager-grid-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
"
                <?php }?>
            >
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            </div>

            <?php $_smarty_tpl->_capture_stack[0][] = array("image_verification", null, null); ob_start();
echo $_smarty_tpl->getSubTemplate ("common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('option'=>"checkout"), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php if (Smarty::$_smarty_vars['capture']['image_verification']) {?>
                <div class="litecheckout__group">
                    <?php echo Smarty::$_smarty_vars['capture']['image_verification'];?>

                </div>
            <?php }?>

            <div class="litecheckout__group litecheckout__submit-order" id="litecheckout_final_section">
                <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/final_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('is_payment_step'=>true,'suffix'=>$_smarty_tpl->tpl_vars['payment']->value['payment_id']), 0);?>

            <!--litecheckout_final_section--></div>
        <!--litecheckout_payments_form--></form>
    </div>
<!--litecheckout_form--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/grid_wrappers/lite_checkout.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/grid_wrappers/lite_checkout.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/tygh/checkout.js"),$_smarty_tpl);?>
 
<?php echo smarty_function_script(array('src'=>"js/tygh/checkout/lite_checkout.js"),$_smarty_tpl);?>
 
<?php echo smarty_function_script(array('src'=>"js/tygh/checkout/pickup_selector.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/checkout/pickup_search.js"),$_smarty_tpl);?>



<?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Security']['secure_storefront']!="partial") {?>
        <div id="litecheckout_login_block" class="hidden" title="<?php echo $_smarty_tpl->__("sign_in");?>
">
            <div class="ty-login-popup">
                <?php echo $_smarty_tpl->getSubTemplate ("views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"popup",'id'=>"litecheckout_login_block_inner"), 0);?>

            </div>
        </div>
    <?php }?>
<?php }?>

<div class="litecheckout litecheckout__form" id="litecheckout_form">
    <h1 class="litecheckout__page-title"><?php echo $_smarty_tpl->__("checkout");?>
</h1>
    <div data-ca-lite-checkout-element="form">
        <form name="litecheckout_payments_form"
            id="litecheckout_payments_form"
            action="<?php echo htmlspecialchars(fn_url("checkout.place_order"), ENT_QUOTES, 'UTF-8');?>
"
            method="post"
            data-ca-lite-checkout-element="checkout-form"
            data-ca-lite-checkout-ready-for-checkout="false"
            class="litecheckout__payment-methods"
        >
            <input
                type="hidden"
                value="1"
                name="ship_to_another"
                data-ca-lite-checkout-field="ship_to_another"
                data-ca-lite-checkout-auto-save-on-change="true"
            >
            <div
                class="litecheckout__group"
                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']&&$_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
                    data-ca-block-manager-grid-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
"
                <?php }?>
            >
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            </div>

            <?php $_smarty_tpl->_capture_stack[0][] = array("image_verification", null, null); ob_start();
echo $_smarty_tpl->getSubTemplate ("common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('option'=>"checkout"), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php if (Smarty::$_smarty_vars['capture']['image_verification']) {?>
                <div class="litecheckout__group">
                    <?php echo Smarty::$_smarty_vars['capture']['image_verification'];?>

                </div>
            <?php }?>

            <div class="litecheckout__group litecheckout__submit-order" id="litecheckout_final_section">
                <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/final_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('is_payment_step'=>true,'suffix'=>$_smarty_tpl->tpl_vars['payment']->value['payment_id']), 0);?>

            <!--litecheckout_final_section--></div>
        <!--litecheckout_payments_form--></form>
    </div>
<!--litecheckout_form--></div>
<?php }?><?php }} ?>
