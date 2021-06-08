<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 18:06:31
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\views\payments\processor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213318967960bf3317066882-20763057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdf5774587ec3c69dad830c1bac4cc0430f0eb43' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\views\\payments\\processor.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '213318967960bf3317066882-20763057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'payment_id' => 0,
    'curl_info' => 0,
    'processor_template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf3317085213_27664446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf3317085213_27664446')) {function content_60bf3317085213_27664446($_smarty_tpl) {?><div id="content_tab_conf_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_id']->value, ENT_QUOTES, 'UTF-8');?>
">

<?php echo $_smarty_tpl->tpl_vars['curl_info']->value;?>


<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['processor_template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!--content_tab_conf_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }} ?>
