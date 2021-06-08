<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:56
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\buttons\add_empty_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123324471260bf70d4dc78d4-75164085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a1dbb6fe9a7ace2686b55c81d6fd12a40622e5c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\buttons\\add_empty_item.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '123324471260bf70d4dc78d4-75164085',
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
  'unifunc' => 'content_60bf70d4dc9536_43629050',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70d4dc9536_43629050')) {function content_60bf70d4dc9536_43629050($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add'));
?>
<a class="icon-plus cm-tooltip" name="add" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("add");?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"></a>&nbsp;<?php }} ?>
