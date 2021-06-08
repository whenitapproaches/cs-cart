<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:56
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\addons\seo\hooks\products\update_seo.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:740585760bf70d46c5137-52124912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '489f2884b7c933a1268ff07147a1f6cfbab6e5b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\addons\\seo\\hooks\\products\\update_seo.pre.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '740585760bf70d46c5137-52124912',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view_uri' => 0,
    'runtime' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70d46c8d56_78019699',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70d46c8d56_78019699')) {function content_60bf70d46c8d56_78019699($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['view_uri']->value&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_data'=>$_smarty_tpl->tpl_vars['product_data']->value,'object_name'=>"product_data",'object_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id'],'object_type'=>"p",'share_dont_hide'=>true), 0);?>

<?php }?>
<?php }} ?>
