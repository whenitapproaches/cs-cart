<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:31
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\views\companies\components\company_name.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171680770060bf70bb83c4d7-18242667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75739d8266c7157ad83a4edd9e4fc9bdfdc63887' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\views\\companies\\components\\company_name.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '171680770060bf70bb83c4d7-18242667',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'object' => 0,
    'simple' => 0,
    '_company_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70bb8419f9_88786279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70bb8419f9_88786279')) {function content_60bf70bb8419f9_88786279($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']&&$_smarty_tpl->tpl_vars['object']->value['company_id']) {?>
    <?php if (!$_smarty_tpl->tpl_vars['object']->value['company_name']) {?>
        <?php $_smarty_tpl->tpl_vars['_company_name'] = new Smarty_variable(fn_get_company_name($_smarty_tpl->tpl_vars['object']->value['company_id']), null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['simple']->value) {?>
        <small class="muted"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['object']->value['company_name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['_company_name']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
</small>
    <?php } else { ?>
        <p class="muted"><small><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['object']->value['company_name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['_company_name']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
</small></p>
    <?php }?>
<?php }?><?php }} ?>
