<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 11:35:53
         compiled from "C:\xampp\htdocs\cs-jp\design\themes\responsive\templates\views\checkout\components\customer\location.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13446594660bed789613bb7-47495371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0eab6d50d0b29b4635cae9a864b593b0766c7d46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\themes\\responsive\\templates\\views\\checkout\\components\\customer\\location.tpl',
      1 => 1622772465,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13446594660bed789613bb7-47495371',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_profiles_on_checkout' => 0,
    'section' => 0,
    'profile_fields' => 0,
    'profile_field' => 0,
    'city_autocomplete' => 0,
    'key' => 0,
    'show_city' => 0,
    'block_title' => 0,
    'show_state' => 0,
    'exclude_fields' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bed78964b576_30957674',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bed78964b576_30957674')) {function content_60bed78964b576_30957674($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('lite_checkout.deliver_to','lite_checkout.deliver_to'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!$_smarty_tpl->tpl_vars['show_profiles_on_checkout']->value) {?>
    <?php $_smarty_tpl->tpl_vars['show_city'] = new Smarty_variable(false, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_state'] = new Smarty_variable(false, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_country'] = new Smarty_variable(false, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['exclude_fields'] = new Smarty_variable(array(), null, 0);?>

    <?php  $_smarty_tpl->tpl_vars['profile_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profile_field']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['profile_field']->key => $_smarty_tpl->tpl_vars['profile_field']->value) {
$_smarty_tpl->tpl_vars['profile_field']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['profile_field']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['profile_field']->value['field_name']=="s_city") {?>
            <?php $_smarty_tpl->tpl_vars['show_city'] = new Smarty_variable(true, null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['city_autocomplete']->value) {?>
                <?php $_smarty_tpl->createLocalArrayVariable('profile_fields', null, 0);
$_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value][$_smarty_tpl->tpl_vars['key']->value]['template'] = "views/checkout/components/profile_fields/s_city_autocomplete.tpl";?>
            <?php } else { ?>
                <?php $_smarty_tpl->createLocalArrayVariable('profile_fields', null, 0);
$_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value][$_smarty_tpl->tpl_vars['key']->value]['template'] = "views/checkout/components/profile_fields/s_city.tpl";?>
            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['profile_field']->value['field_name']=="s_state") {?>
            <?php $_smarty_tpl->tpl_vars['show_state'] = new Smarty_variable(true, null, 0);?>
            <?php $_smarty_tpl->createLocalArrayVariable('profile_fields', null, 0);
$_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value][$_smarty_tpl->tpl_vars['key']->value]['template'] = "views/checkout/components/profile_fields/s_state.tpl";?>
        <?php } elseif ($_smarty_tpl->tpl_vars['profile_field']->value['field_name']=="s_country") {?>
            <?php $_smarty_tpl->tpl_vars['show_country'] = new Smarty_variable(true, null, 0);?>
            <?php $_smarty_tpl->createLocalArrayVariable('profile_fields', null, 0);
$_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value][$_smarty_tpl->tpl_vars['key']->value]['template'] = "views/checkout/components/profile_fields/s_country.tpl";?>
        <?php }?>
    <?php } ?>

    <?php if ($_smarty_tpl->tpl_vars['show_city']->value&&$_smarty_tpl->tpl_vars['city_autocomplete']->value) {?>
        <?php $_smarty_tpl->createLocalArrayVariable('exclude_fields', null, 0);
$_smarty_tpl->tpl_vars['exclude_fields']->value[] = "s_state";?>
    <?php }?>

    <div class="litecheckout__container">
        <div class="litecheckout__group" id="litecheckout_step_location">
            <div class="litecheckout__group">
                <div class="litecheckout__item">
                    <h2 class="litecheckout__step-title"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['block_title']->value)===null||$tmp==='' ? $_smarty_tpl->__("lite_checkout.deliver_to") : $tmp), ENT_QUOTES, 'UTF-8');?>
</h2>
                </div>

                <?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_city']->value)===null||$tmp==='' ? true : $tmp)||(($tmp = @$_smarty_tpl->tpl_vars['show_state']->value)===null||$tmp==='' ? true : $tmp)) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php }?>

                <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('profile_fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value,'section'=>smarty_modifier_enum("ProfileFieldSections::SHIPPING_ADDRESS"),'exclude'=>$_smarty_tpl->tpl_vars['exclude_fields']->value), 0);?>

            </div>

            <div id="litecheckout_autocomplete_dropdown" class="litecheckout__autocomplete-dropdown"></div>
        <!--litecheckout_step_location--></div>
    </div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/customer/location.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/customer/location.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!$_smarty_tpl->tpl_vars['show_profiles_on_checkout']->value) {?>
    <?php $_smarty_tpl->tpl_vars['show_city'] = new Smarty_variable(false, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_state'] = new Smarty_variable(false, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_country'] = new Smarty_variable(false, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['exclude_fields'] = new Smarty_variable(array(), null, 0);?>

    <?php  $_smarty_tpl->tpl_vars['profile_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profile_field']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['profile_field']->key => $_smarty_tpl->tpl_vars['profile_field']->value) {
$_smarty_tpl->tpl_vars['profile_field']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['profile_field']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['profile_field']->value['field_name']=="s_city") {?>
            <?php $_smarty_tpl->tpl_vars['show_city'] = new Smarty_variable(true, null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['city_autocomplete']->value) {?>
                <?php $_smarty_tpl->createLocalArrayVariable('profile_fields', null, 0);
$_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value][$_smarty_tpl->tpl_vars['key']->value]['template'] = "views/checkout/components/profile_fields/s_city_autocomplete.tpl";?>
            <?php } else { ?>
                <?php $_smarty_tpl->createLocalArrayVariable('profile_fields', null, 0);
$_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value][$_smarty_tpl->tpl_vars['key']->value]['template'] = "views/checkout/components/profile_fields/s_city.tpl";?>
            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['profile_field']->value['field_name']=="s_state") {?>
            <?php $_smarty_tpl->tpl_vars['show_state'] = new Smarty_variable(true, null, 0);?>
            <?php $_smarty_tpl->createLocalArrayVariable('profile_fields', null, 0);
$_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value][$_smarty_tpl->tpl_vars['key']->value]['template'] = "views/checkout/components/profile_fields/s_state.tpl";?>
        <?php } elseif ($_smarty_tpl->tpl_vars['profile_field']->value['field_name']=="s_country") {?>
            <?php $_smarty_tpl->tpl_vars['show_country'] = new Smarty_variable(true, null, 0);?>
            <?php $_smarty_tpl->createLocalArrayVariable('profile_fields', null, 0);
$_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value][$_smarty_tpl->tpl_vars['key']->value]['template'] = "views/checkout/components/profile_fields/s_country.tpl";?>
        <?php }?>
    <?php } ?>

    <?php if ($_smarty_tpl->tpl_vars['show_city']->value&&$_smarty_tpl->tpl_vars['city_autocomplete']->value) {?>
        <?php $_smarty_tpl->createLocalArrayVariable('exclude_fields', null, 0);
$_smarty_tpl->tpl_vars['exclude_fields']->value[] = "s_state";?>
    <?php }?>

    <div class="litecheckout__container">
        <div class="litecheckout__group" id="litecheckout_step_location">
            <div class="litecheckout__group">
                <div class="litecheckout__item">
                    <h2 class="litecheckout__step-title"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['block_title']->value)===null||$tmp==='' ? $_smarty_tpl->__("lite_checkout.deliver_to") : $tmp), ENT_QUOTES, 'UTF-8');?>
</h2>
                </div>

                <?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_city']->value)===null||$tmp==='' ? true : $tmp)||(($tmp = @$_smarty_tpl->tpl_vars['show_state']->value)===null||$tmp==='' ? true : $tmp)) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php }?>

                <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('profile_fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value,'section'=>smarty_modifier_enum("ProfileFieldSections::SHIPPING_ADDRESS"),'exclude'=>$_smarty_tpl->tpl_vars['exclude_fields']->value), 0);?>

            </div>

            <div id="litecheckout_autocomplete_dropdown" class="litecheckout__autocomplete-dropdown"></div>
        <!--litecheckout_step_location--></div>
    </div>
<?php }?>
<?php }?><?php }} ?>
