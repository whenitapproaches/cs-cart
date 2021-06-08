<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 11:35:54
         compiled from "C:\xampp\htdocs\cs-jp\design\themes\responsive\templates\views\checkout\components\shipping_rates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14419824160bed78a0e3250-18003134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d7317c04dde5ad33249743fbabd88e6b961fe9b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\themes\\responsive\\templates\\views\\checkout\\components\\shipping_rates.tpl',
      1 => 1622772465,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14419824160bed78a0e3250-18003134',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_groups' => 0,
    'group' => 0,
    'shipping' => 0,
    'rate' => 0,
    'tax' => 0,
    'inc_tax_lang' => 0,
    'group_key' => 0,
    'cart' => 0,
    'shipping_id' => 0,
    'delivery_time' => 0,
    'delivery_timing' => 0,
    'delivery_timetable' => 0,
    'delivery_date_table' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bed78a15fe47_44375737',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bed78a15fe47_44375737')) {function content_60bed78a15fe47_44375737($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_count')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\modifier.count.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('lite_checkout.click_here_to_update_shipping','lite_checkout.shipping_method_for','free','jp_shipping_delivery_time','jp_delivery_date','free_shipping','no_shipping_required','text_no_shipping_methods','lite_checkout.click_here_to_update_shipping','lite_checkout.shipping_method_for','free','jp_shipping_delivery_time','jp_delivery_date','free_shipping','no_shipping_required','text_no_shipping_methods'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<div class="litecheckout__group litecheckout__shippings"
     data-ca-lite-checkout-overlay-message="<?php echo $_smarty_tpl->__("lite_checkout.click_here_to_update_shipping");?>
"
     data-ca-lite-checkout-overlay-class="litecheckout__overlay--active"
     data-ca-lite-checkout-element="shipping-methods"
     id="shipping_rates_list">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:shipping_rates")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:shipping_rates"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    <input type="hidden"
           name="additional_result_ids[]"
           value="litecheckout_final_section,litecheckout_step_payment,checkout*"
    />

    <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['group_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['group_key']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['product_groups']->value)>1) {?>
            <div class="litecheckout__group">
                <div class="litecheckout__item">
                    <h2 class="litecheckout__step-title">
                        <?php echo $_smarty_tpl->__("lite_checkout.shipping_method_for",array("[group_name]"=>$_smarty_tpl->tpl_vars['group']->value['name']));?>

                    </h2>
                </div>
            </div>
        <?php }?>

        <div class="litecheckout__group">
            
            <?php if ($_smarty_tpl->tpl_vars['group']->value['shippings']&&!$_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping']&&!$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>

                <?php  $_smarty_tpl->tpl_vars['shipping'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shipping']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['shippings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->key => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->_loop = true;
?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:shipping_rate")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:shipping_rate"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php $_smarty_tpl->tpl_vars['delivery_time'] = new Smarty_variable('', null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['delivery_time']||$_smarty_tpl->tpl_vars['shipping']->value['service_delivery_time']) {?>
                            <?php $_smarty_tpl->tpl_vars['delivery_time'] = new Smarty_variable("(".((string)(($tmp = @$_smarty_tpl->tpl_vars['shipping']->value['service_delivery_time'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shipping']->value['delivery_time'] : $tmp)).")", null, 0);?>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['rate']) {?>
                            <?php $_smarty_tpl->_capture_stack[0][] = array('default', "rate", null); ob_start();
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['rate']), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                            <?php if ($_smarty_tpl->tpl_vars['shipping']->value['inc_tax']) {?>
                                <?php $_smarty_tpl->tpl_vars['rate'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value)." (", null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['shipping']->value['taxed_price']&&$_smarty_tpl->tpl_vars['shipping']->value['taxed_price']!=$_smarty_tpl->tpl_vars['shipping']->value['rate']) {?>
                                    <?php $_smarty_tpl->_capture_stack[0][] = array('default', "tax", null); ob_start();
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['taxed_price'],'class'=>"ty-nowrap"), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                    <?php $_smarty_tpl->tpl_vars['rate'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value).((string)$_smarty_tpl->tpl_vars['tax']->value)." ", null, 0);?>
                                <?php }?>
                                <?php $_smarty_tpl->tpl_vars['inc_tax_lang'] = new Smarty_variable($_smarty_tpl->__('inc_tax'), null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['rate'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value).((string)$_smarty_tpl->tpl_vars['inc_tax_lang']->value).")", null, 0);?>
                            <?php }?>
                        <?php } elseif (fn_is_lang_var_exists("free")) {?>
                            <?php $_smarty_tpl->tpl_vars['rate'] = new Smarty_variable($_smarty_tpl->__("free"), null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['rate'] = new Smarty_variable('', null, 0);?>
                        <?php }?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:shipping_rate"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    
                    <div class="litecheckout__shipping-method litecheckout__field litecheckout__field--fill">
                    
                        <input
                            type="radio"
                            class="litecheckout__shipping-method__radio hidden"
                            id="sh_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                            name="shipping_ids[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
]"
                            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                            onclick="fn_calculate_total_shipping_cost(); $.ceLiteCheckout('toggleAddress', <?php if ($_smarty_tpl->tpl_vars['shipping']->value['is_address_required']=="Y") {?>true<?php } else { ?>false<?php }?>);"
                            data-ca-lite-checkout-element="shipping-method"
                            data-ca-lite-checkout-is-address-required="<?php if ($_smarty_tpl->tpl_vars['shipping']->value['is_address_required']=="Y") {?>true<?php } else { ?>false<?php }?>"
                            <?php if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value]==$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>checked<?php }?>
                        />

                        <label
                            for="sh_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                            class="litecheckout__shipping-method__wrapper js-litecheckout-activate"
                            data-ca-activate="sd_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                        >
                            <?php if ($_smarty_tpl->tpl_vars['shipping']->value['image']) {?>
                                <div class="litecheckout__shipping-method__logo">
                                    <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>$_smarty_tpl->tpl_vars['shipping_id']->value,'images'=>$_smarty_tpl->tpl_vars['shipping']->value['image'],'class'=>"shipping-method__logo-image litecheckout__shipping-method__logo-image"), 0);?>

                                </div>
                            <?php }?>
                            <p class="litecheckout__shipping-method__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['rate']->value) {?> — <?php echo $_smarty_tpl->tpl_vars['rate']->value;
}?></p>
                            <p class="litecheckout__shipping-method__delivery-time"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'UTF-8');?>
</p>

                            
                            <?php $_smarty_tpl->tpl_vars["delivery_timing"] = new Smarty_variable(fn_lcjp_get_delivery_timing($_smarty_tpl->tpl_vars['shipping']->value['shipping_id']), null, 0);?>

                            <div>
                                <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['delivery_timing']->value)) {?>
                                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['delivery_timing']->value['delivery_time_array'])) {?>
                                        <div class="jp_delivery_option">
                                            <label for= "delivery_time_selected_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("jp_shipping_delivery_time");?>
：</label>
                                            <select id="delivery_time_selected_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" name="delivery_time_selected_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" onchange="fn_calculate_total_shipping_cost(); $.ceLiteCheckout('toggleAddress', <?php if ($_smarty_tpl->tpl_vars['shipping']->value['is_address_required']=="Y") {?>true<?php } else { ?>false<?php }?>);">
                                                <?php  $_smarty_tpl->tpl_vars["delivery_timetable"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["delivery_timetable"]->_loop = false;
 $_smarty_tpl->tpl_vars["timekey"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['delivery_timing']->value['delivery_time_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["delivery_timetable"]->key => $_smarty_tpl->tpl_vars["delivery_timetable"]->value) {
$_smarty_tpl->tpl_vars["delivery_timetable"]->_loop = true;
 $_smarty_tpl->tpl_vars["timekey"]->value = $_smarty_tpl->tpl_vars["delivery_timetable"]->key;
?>
                                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_timetable']->value, ENT_QUOTES, 'UTF-8');?>
" <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
<?php $_tmp5=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['cart']->value['shipping'][$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']]['delivery_info'][$_tmp5]['delivery_time_selected']==$_smarty_tpl->tpl_vars['delivery_timetable']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_timetable']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    <?php }?>
                                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['delivery_timing']->value['delivery_date_array'])) {?>
                                        <div class="jp_delivery_option">
                                            <label for= "delivery_date_selected_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("jp_delivery_date");?>
：</label>
                                            <select id="delivery_date_selected_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" name="delivery_date_selected_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" onchange="fn_calculate_total_shipping_cost(); $.ceLiteCheckout('toggleAddress', <?php if ($_smarty_tpl->tpl_vars['shipping']->value['is_address_required']=="Y") {?>true<?php } else { ?>false<?php }?>);">
                                                <?php  $_smarty_tpl->tpl_vars["delivery_date_table"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["delivery_date_table"]->_loop = false;
 $_smarty_tpl->tpl_vars["daykey"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['delivery_timing']->value['delivery_date_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["delivery_date_table"]->key => $_smarty_tpl->tpl_vars["delivery_date_table"]->value) {
$_smarty_tpl->tpl_vars["delivery_date_table"]->_loop = true;
 $_smarty_tpl->tpl_vars["daykey"]->value = $_smarty_tpl->tpl_vars["delivery_date_table"]->key;
?>
                                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_date_table']->value, ENT_QUOTES, 'UTF-8');?>
" <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
<?php $_tmp6=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['cart']->value['shipping'][$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']]['delivery_info'][$_tmp6]['delivery_date_selected']==$_smarty_tpl->tpl_vars['delivery_date_table']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_date_table']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    <?php }?>
                                <?php }?>
                            </div>
                            
                        </label>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <p class="litecheckout__shipping-method__text">
                    <?php if ($_smarty_tpl->tpl_vars['group']->value['all_free_shipping']) {?>
                        <?php echo $_smarty_tpl->__("free_shipping");?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping']||$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                        <?php echo $_smarty_tpl->__("no_shipping_required");?>

                    <?php } else { ?>
                        <span class="ty-error-text">
                            <?php echo $_smarty_tpl->__("text_no_shipping_methods");?>

                        </span>
                    <?php }?>
                </p>
            <?php }?>
        </div>

        <div class="litecheckout__group">
            <?php  $_smarty_tpl->tpl_vars['shipping'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shipping']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['shippings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->key => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->_loop = true;
?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:shipping_method")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:shipping_method"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:shipping_method"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php } ?>
            <div class="litecheckout__item">
                <?php  $_smarty_tpl->tpl_vars['shipping'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shipping']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['shippings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->key => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value]==$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>
                        <div class="litecheckout__shipping-method__description">
                            <?php echo $_smarty_tpl->tpl_vars['shipping']->value['description'];?>

                        </div>
                    <?php }?>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:shipping_rates"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<!--shipping_rates_list--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/shipping_rates.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/shipping_rates.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<div class="litecheckout__group litecheckout__shippings"
     data-ca-lite-checkout-overlay-message="<?php echo $_smarty_tpl->__("lite_checkout.click_here_to_update_shipping");?>
"
     data-ca-lite-checkout-overlay-class="litecheckout__overlay--active"
     data-ca-lite-checkout-element="shipping-methods"
     id="shipping_rates_list">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:shipping_rates")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:shipping_rates"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    <input type="hidden"
           name="additional_result_ids[]"
           value="litecheckout_final_section,litecheckout_step_payment,checkout*"
    />

    <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['group_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['group_key']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['product_groups']->value)>1) {?>
            <div class="litecheckout__group">
                <div class="litecheckout__item">
                    <h2 class="litecheckout__step-title">
                        <?php echo $_smarty_tpl->__("lite_checkout.shipping_method_for",array("[group_name]"=>$_smarty_tpl->tpl_vars['group']->value['name']));?>

                    </h2>
                </div>
            </div>
        <?php }?>

        <div class="litecheckout__group">
            
            <?php if ($_smarty_tpl->tpl_vars['group']->value['shippings']&&!$_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping']&&!$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>

                <?php  $_smarty_tpl->tpl_vars['shipping'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shipping']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['shippings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->key => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->_loop = true;
?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:shipping_rate")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:shipping_rate"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php $_smarty_tpl->tpl_vars['delivery_time'] = new Smarty_variable('', null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['delivery_time']||$_smarty_tpl->tpl_vars['shipping']->value['service_delivery_time']) {?>
                            <?php $_smarty_tpl->tpl_vars['delivery_time'] = new Smarty_variable("(".((string)(($tmp = @$_smarty_tpl->tpl_vars['shipping']->value['service_delivery_time'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shipping']->value['delivery_time'] : $tmp)).")", null, 0);?>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['rate']) {?>
                            <?php $_smarty_tpl->_capture_stack[0][] = array('default', "rate", null); ob_start();
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['rate']), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                            <?php if ($_smarty_tpl->tpl_vars['shipping']->value['inc_tax']) {?>
                                <?php $_smarty_tpl->tpl_vars['rate'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value)." (", null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['shipping']->value['taxed_price']&&$_smarty_tpl->tpl_vars['shipping']->value['taxed_price']!=$_smarty_tpl->tpl_vars['shipping']->value['rate']) {?>
                                    <?php $_smarty_tpl->_capture_stack[0][] = array('default', "tax", null); ob_start();
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['taxed_price'],'class'=>"ty-nowrap"), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                    <?php $_smarty_tpl->tpl_vars['rate'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value).((string)$_smarty_tpl->tpl_vars['tax']->value)." ", null, 0);?>
                                <?php }?>
                                <?php $_smarty_tpl->tpl_vars['inc_tax_lang'] = new Smarty_variable($_smarty_tpl->__('inc_tax'), null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['rate'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['rate']->value).((string)$_smarty_tpl->tpl_vars['inc_tax_lang']->value).")", null, 0);?>
                            <?php }?>
                        <?php } elseif (fn_is_lang_var_exists("free")) {?>
                            <?php $_smarty_tpl->tpl_vars['rate'] = new Smarty_variable($_smarty_tpl->__("free"), null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['rate'] = new Smarty_variable('', null, 0);?>
                        <?php }?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:shipping_rate"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    
                    <div class="litecheckout__shipping-method litecheckout__field litecheckout__field--fill">
                    
                        <input
                            type="radio"
                            class="litecheckout__shipping-method__radio hidden"
                            id="sh_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                            name="shipping_ids[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
]"
                            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                            onclick="fn_calculate_total_shipping_cost(); $.ceLiteCheckout('toggleAddress', <?php if ($_smarty_tpl->tpl_vars['shipping']->value['is_address_required']=="Y") {?>true<?php } else { ?>false<?php }?>);"
                            data-ca-lite-checkout-element="shipping-method"
                            data-ca-lite-checkout-is-address-required="<?php if ($_smarty_tpl->tpl_vars['shipping']->value['is_address_required']=="Y") {?>true<?php } else { ?>false<?php }?>"
                            <?php if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value]==$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>checked<?php }?>
                        />

                        <label
                            for="sh_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                            class="litecheckout__shipping-method__wrapper js-litecheckout-activate"
                            data-ca-activate="sd_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                        >
                            <?php if ($_smarty_tpl->tpl_vars['shipping']->value['image']) {?>
                                <div class="litecheckout__shipping-method__logo">
                                    <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>$_smarty_tpl->tpl_vars['shipping_id']->value,'images'=>$_smarty_tpl->tpl_vars['shipping']->value['image'],'class'=>"shipping-method__logo-image litecheckout__shipping-method__logo-image"), 0);?>

                                </div>
                            <?php }?>
                            <p class="litecheckout__shipping-method__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['rate']->value) {?> — <?php echo $_smarty_tpl->tpl_vars['rate']->value;
}?></p>
                            <p class="litecheckout__shipping-method__delivery-time"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_time']->value, ENT_QUOTES, 'UTF-8');?>
</p>

                            
                            <?php $_smarty_tpl->tpl_vars["delivery_timing"] = new Smarty_variable(fn_lcjp_get_delivery_timing($_smarty_tpl->tpl_vars['shipping']->value['shipping_id']), null, 0);?>

                            <div>
                                <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['delivery_timing']->value)) {?>
                                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['delivery_timing']->value['delivery_time_array'])) {?>
                                        <div class="jp_delivery_option">
                                            <label for= "delivery_time_selected_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("jp_shipping_delivery_time");?>
：</label>
                                            <select id="delivery_time_selected_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" name="delivery_time_selected_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" onchange="fn_calculate_total_shipping_cost(); $.ceLiteCheckout('toggleAddress', <?php if ($_smarty_tpl->tpl_vars['shipping']->value['is_address_required']=="Y") {?>true<?php } else { ?>false<?php }?>);">
                                                <?php  $_smarty_tpl->tpl_vars["delivery_timetable"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["delivery_timetable"]->_loop = false;
 $_smarty_tpl->tpl_vars["timekey"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['delivery_timing']->value['delivery_time_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["delivery_timetable"]->key => $_smarty_tpl->tpl_vars["delivery_timetable"]->value) {
$_smarty_tpl->tpl_vars["delivery_timetable"]->_loop = true;
 $_smarty_tpl->tpl_vars["timekey"]->value = $_smarty_tpl->tpl_vars["delivery_timetable"]->key;
?>
                                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_timetable']->value, ENT_QUOTES, 'UTF-8');?>
" <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
<?php $_tmp7=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['cart']->value['shipping'][$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']]['delivery_info'][$_tmp7]['delivery_time_selected']==$_smarty_tpl->tpl_vars['delivery_timetable']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_timetable']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    <?php }?>
                                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['delivery_timing']->value['delivery_date_array'])) {?>
                                        <div class="jp_delivery_option">
                                            <label for= "delivery_date_selected_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("jp_delivery_date");?>
：</label>
                                            <select id="delivery_date_selected_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" name="delivery_date_selected_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" onchange="fn_calculate_total_shipping_cost(); $.ceLiteCheckout('toggleAddress', <?php if ($_smarty_tpl->tpl_vars['shipping']->value['is_address_required']=="Y") {?>true<?php } else { ?>false<?php }?>);">
                                                <?php  $_smarty_tpl->tpl_vars["delivery_date_table"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["delivery_date_table"]->_loop = false;
 $_smarty_tpl->tpl_vars["daykey"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['delivery_timing']->value['delivery_date_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["delivery_date_table"]->key => $_smarty_tpl->tpl_vars["delivery_date_table"]->value) {
$_smarty_tpl->tpl_vars["delivery_date_table"]->_loop = true;
 $_smarty_tpl->tpl_vars["daykey"]->value = $_smarty_tpl->tpl_vars["delivery_date_table"]->key;
?>
                                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_date_table']->value, ENT_QUOTES, 'UTF-8');?>
" <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
<?php $_tmp8=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['cart']->value['shipping'][$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']]['delivery_info'][$_tmp8]['delivery_date_selected']==$_smarty_tpl->tpl_vars['delivery_date_table']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_date_table']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    <?php }?>
                                <?php }?>
                            </div>
                            
                        </label>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <p class="litecheckout__shipping-method__text">
                    <?php if ($_smarty_tpl->tpl_vars['group']->value['all_free_shipping']) {?>
                        <?php echo $_smarty_tpl->__("free_shipping");?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['all_edp_free_shipping']||$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                        <?php echo $_smarty_tpl->__("no_shipping_required");?>

                    <?php } else { ?>
                        <span class="ty-error-text">
                            <?php echo $_smarty_tpl->__("text_no_shipping_methods");?>

                        </span>
                    <?php }?>
                </p>
            <?php }?>
        </div>

        <div class="litecheckout__group">
            <?php  $_smarty_tpl->tpl_vars['shipping'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shipping']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['shippings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->key => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->_loop = true;
?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:shipping_method")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:shipping_method"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:shipping_method"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php } ?>
            <div class="litecheckout__item">
                <?php  $_smarty_tpl->tpl_vars['shipping'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shipping']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['shippings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->key => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value]==$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>
                        <div class="litecheckout__shipping-method__description">
                            <?php echo $_smarty_tpl->tpl_vars['shipping']->value['description'];?>

                        </div>
                    <?php }?>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:shipping_rates"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<!--shipping_rates_list--></div>
<?php }?><?php }} ?>
