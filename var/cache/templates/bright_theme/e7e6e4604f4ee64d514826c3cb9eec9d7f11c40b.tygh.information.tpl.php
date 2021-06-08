<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 18:01:28
         compiled from "C:\xampp\htdocs\cs-jp\design\themes\responsive\templates\views\checkout\components\customer\information.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5470448760bf31e893d366-65427499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7e6e4604f4ee64d514826c3cb9eec9d7f11c40b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\themes\\responsive\\templates\\views\\checkout\\components\\customer\\information.tpl',
      1 => 1622772465,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5470448760bf31e893d366-65427499',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'profile_fields' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf31e8946413_63204069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf31e8946413_63204069')) {function content_60bf31e8946413_63204069($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div id="litecheckout_step_customer_info" class="litecheckout__group">
    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('profile_fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value,'section'=>smarty_modifier_enum("ProfileFieldSections::CONTACT_INFORMATION")), 0);?>

</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/customer/information.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/customer/information.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div id="litecheckout_step_customer_info" class="litecheckout__group">
    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('profile_fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value,'section'=>smarty_modifier_enum("ProfileFieldSections::CONTACT_INFORMATION")), 0);?>

</div>
<?php }?><?php }} ?>
