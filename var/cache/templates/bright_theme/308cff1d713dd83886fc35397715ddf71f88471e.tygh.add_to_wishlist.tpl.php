<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 21:12:21
         compiled from "C:\xampp\htdocs\cs-jp\design\themes\responsive\templates\addons\wishlist\views\wishlist\components\add_to_wishlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210685762060bf5ea58554d4-51845521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '308cff1d713dd83886fc35397715ddf71f88471e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\themes\\responsive\\templates\\addons\\wishlist\\views\\wishlist\\components\\add_to_wishlist.tpl',
      1 => 1622772472,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '210685762060bf5ea58554d4-51845521',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'but_id' => 0,
    'but_name' => 0,
    'but_onclick' => 0,
    'but_href' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf5ea58604d4_44769166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf5ea58604d4_44769166')) {function content_60bf5ea58604d4_44769166($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_to_wishlist','add_to_wishlist'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_meta'=>"ty-btn__text ty-add-to-wish",'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_text'=>$_smarty_tpl->__("add_to_wishlist"),'but_role'=>"text",'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_rel'=>"nofollow"), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/views/wishlist/components/add_to_wishlist.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/views/wishlist/components/add_to_wishlist.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_meta'=>"ty-btn__text ty-add-to-wish",'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_text'=>$_smarty_tpl->__("add_to_wishlist"),'but_role'=>"text",'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_rel'=>"nofollow"), 0);
}?><?php }} ?>
