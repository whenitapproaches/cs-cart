<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:57
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\addons\tags\hooks\products\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214043027560bf70d586cf26-21517172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58eeef3d719017d76b129d019a544f8401047466' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\addons\\tags\\hooks\\products\\tabs_content.post.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '214043027560bf70d586cf26-21517172',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70d5871340_00392742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70d5871340_00392742')) {function content_60bf70d5871340_00392742($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['tags']['tags_for_products']=="Y") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/tags/views/tags/components/object_tags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['product_data']->value,'input_name'=>"product_data",'allow_save'=>true,'object_type'=>"P",'object_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id']), 0);?>

    <?php }?>
<?php }?><?php }} ?>
