<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:30:05
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\addons\vendor_plans\hooks\profiles\profile_fields.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22864454260bf70dd6e51e7-63825789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5fff8791d240c896dc831be6a487d784d4b74ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\addons\\vendor_plans\\hooks\\profiles\\profile_fields.override.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '22864454260bf70dd6e51e7-63825789',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70dd6e74e5_51769452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70dd6e74e5_51769452')) {function content_60bf70dd6e74e5_51769452($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==@constant('PROFILE_FIELD_TYPE_VENDOR_PLAN')) {?>
    <!--hide vendor plan field in admin area-->
<?php }?>
<?php }} ?>
