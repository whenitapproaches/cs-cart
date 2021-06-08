<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:39
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\addons\discussion\hooks\orders\detailed_after_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24988654560bf70c38ad002-75230757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42cb89e42f1aa24596a49b8e8e6b5675b096ca0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\addons\\discussion\\hooks\\orders\\detailed_after_content.post.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '24988654560bf70c38ad002-75230757',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70c38aeb58_86421820',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70c38aeb58_86421820')) {function content_60bf70c38aeb58_86421820($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_id'=>$_smarty_tpl->tpl_vars['order_info']->value['user_id'],'object_company_id'=>$_smarty_tpl->tpl_vars['order_info']->value['company_id']), 0);?>

<?php }} ?>
