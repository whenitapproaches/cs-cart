<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:37
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\addons\product_variations\hooks\shipments\product_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132872726960bf70c1e39262-16302925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92f6d8f31c07b82fcfab3a5de115538727898a28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\addons\\product_variations\\hooks\\shipments\\product_info.pre.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '132872726960bf70c1e39262-16302925',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oi' => 0,
    'product' => 0,
    'variation_features' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70c1e3dcd6_28016679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70c1e3dcd6_28016679')) {function content_60bf70c1e3dcd6_28016679($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['oi']->value['variation_features']||$_smarty_tpl->tpl_vars['product']->value['variation_features']) {?>

    <?php if ($_smarty_tpl->tpl_vars['oi']->value['variation_features']) {?>
        
        <?php $_smarty_tpl->tpl_vars['variation_features'] = new Smarty_variable($_smarty_tpl->tpl_vars['oi']->value['variation_features'], null, 0);?>
    <?php } else { ?>
        
        <?php $_smarty_tpl->tpl_vars['variation_features'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['variation_features'], null, 0);?>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variation_features'=>$_smarty_tpl->tpl_vars['variation_features']->value,'features_secondary'=>true), 0);?>

<?php }?>
<?php }} ?>
