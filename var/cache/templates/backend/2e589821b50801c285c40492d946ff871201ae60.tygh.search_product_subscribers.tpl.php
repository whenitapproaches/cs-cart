<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:58
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\views\products\components\search_product_subscribers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199066292960bf70d68d0bc7-69360582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e589821b50801c285c40492d946ff871201ae60' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\views\\products\\components\\search_product_subscribers.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '199066292960bf70d68d0bc7-69360582',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_id' => 0,
    'dispatch' => 0,
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70d68d50e6_52310867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70d68d50e6_52310867')) {function content_60bf70d68d50e6_52310867($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('email'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("section", null, null); ob_start(); ?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" class="form-inline" name="subscribers_search_form" method="get">
	<input type="hidden" name="product_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="selected_section" value="subscribers" />
    <input type="hidden" name="dispatch" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dispatch']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <div class="input-append shift-left">
    <input type="text" name="email" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['email'], ENT_QUOTES, 'UTF-8');?>
" class="input-medium" placeholder="<?php echo $_smarty_tpl->__("email");?>
" />
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section_content'=>Smarty::$_smarty_vars['capture']['section']), 0);?>
<?php }} ?>
