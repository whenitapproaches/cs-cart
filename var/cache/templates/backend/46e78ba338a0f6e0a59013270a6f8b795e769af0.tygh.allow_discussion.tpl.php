<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:57
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\addons\discussion\views\discussion_manager\components\allow_discussion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144011122360bf70d570e351-86740338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46e78ba338a0f6e0a59013270a6f8b795e769af0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\addons\\discussion\\views\\discussion_manager\\components\\allow_discussion.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '144011122360bf70d570e351-86740338',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'no_hide_input' => 0,
    'title' => 0,
    'discussion' => 0,
    'object_id' => 0,
    'object_type' => 0,
    'discussion_default_type' => 0,
    'prefix' => 0,
    'discussion_types_list' => 0,
    'discussion_type' => 0,
    'type' => 0,
    'type_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70d57189d5_92247466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70d57189d5_92247466')) {function content_60bf70d57189d5_92247466($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\modifier.enum.php';
?><div class="control-group <?php if ($_smarty_tpl->tpl_vars['no_hide_input']->value) {?>cm-no-hide-input<?php }?>">
    <label class="control-label" for="discussion_type"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
:</label>
    <div class="controls">

        <?php if (!$_smarty_tpl->tpl_vars['discussion']->value) {?>
        <?php $_smarty_tpl->tpl_vars["discussion"] = new Smarty_variable(fn_get_discussion($_smarty_tpl->tpl_vars['object_id']->value,$_smarty_tpl->tpl_vars['object_type']->value), null, 0);?>
        <?php }?>

        <?php $_smarty_tpl->tpl_vars['discussion_types_list'] = new Smarty_variable(fn_discussion_get_discussion_types(), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['discussion_type'] = new Smarty_variable((($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['discussion']->value['type'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['discussion_default_type']->value : $tmp))===null||$tmp==='' ? (smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) : $tmp), null, 0);?>

        <?php if (fn_check_view_permissions("discussion.add")) {?>
            <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[discussion_type]" id="discussion_type">
            <?php  $_smarty_tpl->tpl_vars['type_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type_name']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['discussion_types_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type_name']->key => $_smarty_tpl->tpl_vars['type_name']->value) {
$_smarty_tpl->tpl_vars['type_name']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['type_name']->key;
?>
                <option <?php if ($_smarty_tpl->tpl_vars['discussion_type']->value==$_smarty_tpl->tpl_vars['type']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type_name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
            </select>
        <?php } else { ?>
            <span class="shift-input"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discussion_types_list']->value[$_smarty_tpl->tpl_vars['discussion_type']->value], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php }?>

    </div>
</div><?php }} ?>
