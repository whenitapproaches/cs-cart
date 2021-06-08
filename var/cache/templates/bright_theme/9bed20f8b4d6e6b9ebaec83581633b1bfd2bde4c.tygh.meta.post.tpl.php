<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 18:01:25
         compiled from "C:\xampp\htdocs\cs-jp\design\themes\responsive\templates\addons\seo\hooks\index\meta.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155608900860bf31e5de4d83-86861257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bed20f8b4d6e6b9ebaec83581633b1bfd2bde4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\themes\\responsive\\templates\\addons\\seo\\hooks\\index\\meta.post.tpl',
      1 => 1622772506,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '155608900860bf31e5de4d83-86861257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'seo_canonical' => 0,
    'seo_alt_hreflangs_list' => 0,
    'seo_alt_lang' => 0,
    'seo_alt_lang_code' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf31e5df92b6_55836010',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf31e5df92b6_55836010')) {function content_60bf31e5df92b6_55836010($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php if (!fn_seo_is_indexed_page($_REQUEST)) {?>
<meta name="robots" content="noindex<?php if ($_smarty_tpl->tpl_vars['settings']->value['Security']['secure_storefront']=="partial"&&defined('HTTPS')) {?>,nofollow<?php }?>" />
<?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['current']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['current'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['prev']) {?>
    <link rel="prev" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['prev'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['next']) {?>
    <link rel="next" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['next'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['seo_alt_lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['seo_alt_lang']->_loop = false;
 $_smarty_tpl->tpl_vars['seo_alt_lang_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['seo_alt_hreflangs_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['seo_alt_lang']->key => $_smarty_tpl->tpl_vars['seo_alt_lang']->value) {
$_smarty_tpl->tpl_vars['seo_alt_lang']->_loop = true;
 $_smarty_tpl->tpl_vars['seo_alt_lang_code']->value = $_smarty_tpl->tpl_vars['seo_alt_lang']->key;
?>
    <link title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['name'], ENT_QUOTES, 'UTF-8');?>
" dir="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['direction'], ENT_QUOTES, 'UTF-8');?>
" type="text/html" rel="alternate" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang_code']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['href'], ENT_QUOTES, 'UTF-8');?>
" />
<?php } ?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/seo/hooks/index/meta.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/seo/hooks/index/meta.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<?php if (!fn_seo_is_indexed_page($_REQUEST)) {?>
<meta name="robots" content="noindex<?php if ($_smarty_tpl->tpl_vars['settings']->value['Security']['secure_storefront']=="partial"&&defined('HTTPS')) {?>,nofollow<?php }?>" />
<?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['current']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['current'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['prev']) {?>
    <link rel="prev" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['prev'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['next']) {?>
    <link rel="next" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['next'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['seo_alt_lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['seo_alt_lang']->_loop = false;
 $_smarty_tpl->tpl_vars['seo_alt_lang_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['seo_alt_hreflangs_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['seo_alt_lang']->key => $_smarty_tpl->tpl_vars['seo_alt_lang']->value) {
$_smarty_tpl->tpl_vars['seo_alt_lang']->_loop = true;
 $_smarty_tpl->tpl_vars['seo_alt_lang_code']->value = $_smarty_tpl->tpl_vars['seo_alt_lang']->key;
?>
    <link title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['name'], ENT_QUOTES, 'UTF-8');?>
" dir="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['direction'], ENT_QUOTES, 'UTF-8');?>
" type="text/html" rel="alternate" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang_code']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['href'], ENT_QUOTES, 'UTF-8');?>
" />
<?php } ?>

<?php }?><?php }} ?>
