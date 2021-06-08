<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:30:33
         compiled from "C:\xampp\htdocs\cs-jp\design\themes\responsive\templates\addons\discussion\hooks\orders\tabs.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3436717160bf70f9cfafc2-11656192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd039ec753ac551c15ce2627f800907d74196437b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\themes\\responsive\\templates\\addons\\discussion\\hooks\\orders\\tabs.post.tpl',
      1 => 1622772472,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3436717160bf70f9cfafc2-11656192',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'order_info' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70f9d0a1f7_14771751',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70f9d0a1f7_14771751')) {function content_60bf70f9d0a1f7_14771751($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('discussion_title_order','discussion_title_order'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_id'=>$_smarty_tpl->tpl_vars['order_info']->value['order_id'],'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::ORDER"),'title'=>$_smarty_tpl->__("discussion_title_order")), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/hooks/orders/tabs.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/hooks/orders/tabs.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_id'=>$_smarty_tpl->tpl_vars['order_info']->value['order_id'],'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::ORDER"),'title'=>$_smarty_tpl->__("discussion_title_order")), 0);
}?><?php }} ?>
