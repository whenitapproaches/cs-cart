<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 18:01:19
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\common\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158518369060bf31df8079e9-76015676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92709bcd7bc690c54732275deb8b87bf9e3d8396' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\common\\tooltip.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '158518369060bf31df8079e9-76015676',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tooltip' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf31df809f79_40224729',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf31df809f79_40224729')) {function content_60bf31df809f79_40224729($_smarty_tpl) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'UTF-8');
}?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="icon-question-sign"></i></a><?php }?><?php }} ?>
