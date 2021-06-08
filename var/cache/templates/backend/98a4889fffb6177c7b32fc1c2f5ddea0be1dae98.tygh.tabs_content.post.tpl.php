<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:57
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\addons\discussion\hooks\products\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188873517760bf70d590dd53-30644785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98a4889fffb6177c7b32fc1c2f5ddea0be1dae98' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\addons\\discussion\\hooks\\products\\tabs_content.post.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '188873517760bf70d590dd53-30644785',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70d5910a73_36647191',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70d5910a73_36647191')) {function content_60bf70d5910a73_36647191($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['product_data']->value['company_id']), 0);?>

<?php }?>
<?php }} ?>
