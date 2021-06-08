<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:56
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\buttons\clone_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4091709960bf70d4dff725-80615227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa3c22635cf800a3a8f87203e7438564e0393ccf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\buttons\\clone_item.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4091709960bf70d4dff725-80615227',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item_id' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70d4e01143_50534984',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70d4e01143_50534984')) {function content_60bf70d4e01143_50534984($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('clone'));
?>
<a class="icon-copy cm-tooltip" name="clone" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("clone");?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"></a>&nbsp;<?php }} ?>
