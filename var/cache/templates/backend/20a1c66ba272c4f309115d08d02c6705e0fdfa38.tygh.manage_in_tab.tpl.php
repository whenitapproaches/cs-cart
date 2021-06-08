<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:59
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\views\block_manager\manage_in_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88291209560bf70d7d06a07-17918101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20a1c66ba272c4f309115d08d02c6705e0fdfa38' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\views\\block_manager\\manage_in_tab.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '88291209560bf70d7d06a07-17918101',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layouts' => 0,
    'config' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70d7d33bc6_12958796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70d7d33bc6_12958796')) {function content_60bf70d7d33bc6_12958796($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\modifier.count.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('switch_layout'));
?>
<div id="content_blocks">
    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['layouts']->value)>1) {?>
    <div class="form-horizontal form-edit">
        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("switch_layout");?>
</label>
            <div class="controls">
                <?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"graphic",'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"s_layout="),'items'=>$_smarty_tpl->tpl_vars['layouts']->value,'selected_id'=>$_smarty_tpl->tpl_vars['runtime']->value['layout']['layout_id'],'key_name'=>"name",'display_icons'=>false,'target_id'=>"content_blocks"), 0);?>

            </div>
        </div>
    </div>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/block_manager/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--content_blocks--></div><?php }} ?>
