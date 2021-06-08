<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:38
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\addons\discussion\hooks\orders\customer_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176603483560bf70c2acc749-12735168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ba005aa96cc38e8a3cee2c6c78fef0c680b2a4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\addons\\discussion\\hooks\\orders\\customer_info.post.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '176603483560bf70c2acc749-12735168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'order_info' => 0,
    'discussion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70c2adbbc0_49444980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70c2adbbc0_49444980')) {function content_60bf70c2adbbc0_49444980($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('discussion','discussion_title_order','disabled','enabled','enabled','disabled'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")||$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>

<?php $_smarty_tpl->tpl_vars["discussion"] = new Smarty_variable(fn_get_discussion($_smarty_tpl->tpl_vars['order_info']->value['order_id'],"O"), null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("discussion")), 0);?>


<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("discussion_title_order");?>
</label>
    <div class="controls">
        <?php if (fn_check_view_permissions("discussion.add")) {?>
            <input type="hidden" name="discussion[object_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="discussion[object_type]" value="O" />
            <select name="discussion[type]">
                <option <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars(smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("disabled");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION")) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars(smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("enabled");?>
</option>
            </select>
        <?php } else { ?>
            <span class="shift-input"><?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION")) {
echo $_smarty_tpl->__("enabled");
} else {
echo $_smarty_tpl->__("disabled");
}?></span>
        <?php }?>
    </div>
</div>
<?php }?><?php }} ?>
