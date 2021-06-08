<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:30:32
         compiled from "C:\xampp\htdocs\cs-jp\design\themes\responsive\templates\addons\discussion\hooks\orders\details_bullets.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133663251760bf70f8a7d920-17508926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c49803a7a21fe415bec51cb5c0190612ec269eaa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\themes\\responsive\\templates\\addons\\discussion\\hooks\\orders\\details_bullets.post.tpl',
      1 => 1622772472,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '133663251760bf70f8a7d920-17508926',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'order_info' => 0,
    'addons' => 0,
    'discussion' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70f8a8c175_91399757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70f8a8c175_91399757')) {function content_60bf70f8a8c175_91399757($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('start_communication','start_communication'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["discussion"] = new Smarty_variable(fn_get_discussion($_smarty_tpl->tpl_vars['order_info']->value['order_id'],"O"), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['discussion']['order_initiate']=="Y"&&!$_smarty_tpl->tpl_vars['discussion']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"ty-btn__text",'but_role'=>"text",'but_text'=>$_smarty_tpl->__("start_communication"),'but_href'=>"orders.initiate_discussion?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'but_icon'=>"ty-orders__actions-icon ty-icon-chat"), 0);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/hooks/orders/details_bullets.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/hooks/orders/details_bullets.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars["discussion"] = new Smarty_variable(fn_get_discussion($_smarty_tpl->tpl_vars['order_info']->value['order_id'],"O"), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['discussion']['order_initiate']=="Y"&&!$_smarty_tpl->tpl_vars['discussion']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"ty-btn__text",'but_role'=>"text",'but_text'=>$_smarty_tpl->__("start_communication"),'but_href'=>"orders.initiate_discussion?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'but_icon'=>"ty-orders__actions-icon ty-icon-chat"), 0);?>

<?php }
}?><?php }} ?>
