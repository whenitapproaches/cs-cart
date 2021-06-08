<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:54:59
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\views\debugger\components\server_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161113806860bf76b3c361c7-24047838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa39a5c7ddc6ca04bc7f663ac7674a9e93778e65' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\views\\debugger\\components\\server_tab.tpl',
      1 => 1560233860,
      2 => 'backend',
    ),
  ),
  'nocache_hash' => '161113806860bf76b3c361c7-24047838',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf76b3c63ff3_28257154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf76b3c63ff3_28257154')) {function content_60bf76b3c63ff3_28257154($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="deb-tab-content" id="DebugToolbarTabServerContent">
    <?php echo fn_get_phpinfo('1');?>


    <?php echo fn_get_phpinfo('2');?>


    <?php echo fn_get_phpinfo('4');?>


    <?php echo fn_get_phpinfo('8');?>

<!--DebugToolbarTabServerContent--></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:views/debugger/components/server_tab.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:views/debugger/components/server_tab.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="deb-tab-content" id="DebugToolbarTabServerContent">
    <?php echo fn_get_phpinfo('1');?>


    <?php echo fn_get_phpinfo('2');?>


    <?php echo fn_get_phpinfo('4');?>


    <?php echo fn_get_phpinfo('8');?>

<!--DebugToolbarTabServerContent--></div><?php }?><?php }} ?>
