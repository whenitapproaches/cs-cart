<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:54
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\addons\product_variations\hooks\products\update_product_name.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39249345160bf70d2121d31-89012856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '965ceb9ca8ae89000836d2a53a9f58a37f777070' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_name.override.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '39249345160bf70d2121d31-89012856',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70d2125bd3_50630338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70d2125bd3_50630338')) {function content_60bf70d2125bd3_50630338($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\block.hook.php';
?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("product")) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:update_product_name")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:update_product_name"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <!-- Overridden by the Product Variations add-on -->
    <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product'], ENT_QUOTES, 'UTF-8');?>
" name="product_data[product]">
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:update_product_name"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
