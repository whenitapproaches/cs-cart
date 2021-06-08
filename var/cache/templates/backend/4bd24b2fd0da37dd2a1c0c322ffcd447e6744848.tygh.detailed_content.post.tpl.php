<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:57
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\addons\social_buttons\hooks\products\detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40763749960bf70d54d1366-07245920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bd24b2fd0da37dd2a1c0c322ffcd447e6744848' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\addons\\social_buttons\\hooks\\products\\detailed_content.post.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '40763749960bf70d54d1366-07245920',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70d54d3932_40680024',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70d54d3932_40680024')) {function content_60bf70d54d3932_40680024($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable']=="Y") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/social_buttons/common/facebook_types.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>"product_data",'object_data'=>$_smarty_tpl->tpl_vars['product_data']->value), 0);?>

<?php }?>
<?php }} ?>
