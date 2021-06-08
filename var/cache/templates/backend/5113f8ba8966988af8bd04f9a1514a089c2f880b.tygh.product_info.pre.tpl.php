<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:38
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\addons\product_variations\hooks\orders\product_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175119689960bf70c2283d35-95855966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5113f8ba8966988af8bd04f9a1514a089c2f880b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\addons\\product_variations\\hooks\\orders\\product_info.pre.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '175119689960bf70c2283d35-95855966',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70c22860e3_53863803',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70c22860e3_53863803')) {function content_60bf70c22860e3_53863803($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['cp']->value['variation_features']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variation_features'=>$_smarty_tpl->tpl_vars['cp']->value['variation_features'],'features_secondary'=>true), 0);?>

<?php }?>
<?php }} ?>
