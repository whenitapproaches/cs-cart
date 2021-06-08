<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:30:32
         compiled from "C:\xampp\htdocs\cs-jp\design\themes\responsive\templates\common\subheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180812934660bf70f8c00281-36670991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f45489dc3e2a0800364d0769fb8adf9bd71af1f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\themes\\responsive\\templates\\common\\subheader.tpl',
      1 => 1622772464,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '180812934660bf70f8c00281-36670991',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'class' => 0,
    'extra' => 0,
    'title' => 0,
    'tooltip' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70f8c0c447_21770420',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70f8c0c447_21770420')) {function content_60bf70f8c0c447_21770420($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><h3 class="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['class']->value)===null||$tmp==='' ? "ty-subheader" : $tmp), ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>


    <?php if (trim($_smarty_tpl->tpl_vars['tooltip']->value)) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltip']->value,'params'=>"ty-subheader__tooltip"), 0);?>

    <?php }?>
</h3><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/subheader.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/subheader.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><h3 class="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['class']->value)===null||$tmp==='' ? "ty-subheader" : $tmp), ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>


    <?php if (trim($_smarty_tpl->tpl_vars['tooltip']->value)) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltip']->value,'params'=>"ty-subheader__tooltip"), 0);?>

    <?php }?>
</h3><?php }?><?php }} ?>
