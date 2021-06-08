<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:38
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\addons\discussion\hooks\orders\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96980480460bf70c2bf7942-59458940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b3901542cd073e20150cb253676a240d06c7acf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\addons\\discussion\\hooks\\orders\\tabs_content.post.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '96980480460bf70c2bf7942-59458940',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70c2bf9488_04523799',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70c2bf9488_04523799')) {function content_60bf70c2bf9488_04523799($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_id'=>$_smarty_tpl->tpl_vars['order_info']->value['user_id'],'object_company_id'=>$_smarty_tpl->tpl_vars['order_info']->value['company_id']), 0);?>
<?php }} ?>
