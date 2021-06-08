<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 11:35:41
         compiled from "C:\xampp\htdocs\cs-jp\design\themes\responsive\templates\addons\vendor_communication\hooks\products\view_main_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93436606960bed77d744e21-71352524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9898acb1189ab9e90feef8111c7ea4fc9e5cdd75' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\themes\\responsive\\templates\\addons\\vendor_communication\\hooks\\products\\view_main_info.post.tpl',
      1 => 1622772471,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '93436606960bed77d744e21-71352524',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'auth' => 0,
    'product' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bed77d764319_20182459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bed77d764319_20182459')) {function content_60bed77d764319_20182459($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['addons']->value['vendor_communication']['show_on_product']=="Y") {?>
    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>@constant('VC_OBJECT_TYPE_PRODUCT'),'object_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'company_id'=>$_smarty_tpl->tpl_vars['product']->value['company_id'],'vendor_name'=>$_smarty_tpl->tpl_vars['product']->value['company_name']), 0);?>

    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['Security']['secure_storefront']!="partial") {?>
            <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>
    <?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/hooks/products/view_main_info.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_communication/hooks/products/view_main_info.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['addons']->value['vendor_communication']['show_on_product']=="Y") {?>
    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>@constant('VC_OBJECT_TYPE_PRODUCT'),'object_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'company_id'=>$_smarty_tpl->tpl_vars['product']->value['company_id'],'vendor_name'=>$_smarty_tpl->tpl_vars['product']->value['company_name']), 0);?>

    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['Security']['secure_storefront']!="partial") {?>
            <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>
    <?php }?>
<?php }
}?><?php }} ?>
