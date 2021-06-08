<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:54
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\addons\product_variations\hooks\products\categories_section.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102780881360bf70d2326cd0-70881690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c93d85867efe7b21e2aef4f44813599351b425f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\categories_section.override.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '102780881360bf70d2326cd0-70881690',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70d232a1b6_02197147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70d232a1b6_02197147')) {function content_60bf70d232a1b6_02197147($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\block.hook.php';
?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("categories")) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:categories_section")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:categories_section"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <!-- Overridden by the Product Variations add-on -->
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:categories_section"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
