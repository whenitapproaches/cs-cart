<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:30:33
         compiled from "C:\xampp\htdocs\cs-jp\design\themes\responsive\templates\addons\product_variations\hooks\orders\product_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77789014460bf70f92afda6-79610706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f750073366ef9e01d3605238f58cde624d5d84f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\themes\\responsive\\templates\\addons\\product_variations\\hooks\\orders\\product_info.pre.tpl',
      1 => 1622772471,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '77789014460bf70f92afda6-79610706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'oi' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70f92b9670_27310994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70f92b9670_27310994')) {function content_60bf70f92b9670_27310994($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['oi']->value['variation_features']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variation_features'=>$_smarty_tpl->tpl_vars['oi']->value['variation_features'],'features_secondary'=>true,'features_mini'=>true), 0);?>

<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/orders/product_info.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/orders/product_info.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['oi']->value['variation_features']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variation_features'=>$_smarty_tpl->tpl_vars['oi']->value['variation_features'],'features_secondary'=>true,'features_mini'=>true), 0);?>

<?php }?>
<?php }?><?php }} ?>
