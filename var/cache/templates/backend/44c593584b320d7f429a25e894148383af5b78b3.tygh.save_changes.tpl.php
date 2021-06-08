<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:39
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\buttons\save_changes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69307325560bf70c36ff132-23001209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44c593584b320d7f429a25e894148383af5b78b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\buttons\\save_changes.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '69307325560bf70c36ff132-23001209',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70c3701294_89720405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70c3701294_89720405')) {function content_60bf70c3701294_89720405($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('save_changes'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("save_changes"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0);?>
<?php }} ?>
