<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:47:52
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\views\debugger\components\logging_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87127118460bf7508c7e883-18964389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87fdb63dcf691eca21341cefe609716f2fd1e50d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\views\\debugger\\components\\logging_tab.tpl',
      1 => 1560233860,
      2 => 'backend',
    ),
  ),
  'nocache_hash' => '87127118460bf7508c7e883-18964389',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'data' => 0,
    'name' => 0,
    'first' => 0,
    'checkpoint' => 0,
    'previous' => 0,
    'cur_memory' => 0,
    'cur_files' => 0,
    'cur_queries' => 0,
    'cur_time' => 0,
    'total_time' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf7508cc77d1_27629972',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf7508cc77d1_27629972')) {function content_60bf7508cc77d1_27629972($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="deb-tab-content" id="DebugToolbarTabLoggingContent">
    <?php  $_smarty_tpl->tpl_vars["checkpoint"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["checkpoint"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["checkpoint"]->key => $_smarty_tpl->tpl_vars["checkpoint"]->value) {
$_smarty_tpl->tpl_vars["checkpoint"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["checkpoint"]->key;
?>
    <div class="table-wrapper">
        <table class="deb-table">
            <caption><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</caption>
                <?php if ($_smarty_tpl->tpl_vars['first']->value) {?>
                    <?php $_smarty_tpl->tpl_vars["cur_memory"] = new Smarty_variable($_smarty_tpl->tpl_vars['checkpoint']->value['memory']-$_smarty_tpl->tpl_vars['previous']->value['memory'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["cur_files"] = new Smarty_variable($_smarty_tpl->tpl_vars['checkpoint']->value['included_files']-$_smarty_tpl->tpl_vars['previous']->value['included_files'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["cur_queries"] = new Smarty_variable($_smarty_tpl->tpl_vars['checkpoint']->value['queries']-$_smarty_tpl->tpl_vars['previous']->value['queries'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["cur_time"] = new Smarty_variable($_smarty_tpl->tpl_vars['checkpoint']->value['time']-$_smarty_tpl->tpl_vars['previous']->value['time'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["total_time"] = new Smarty_variable($_smarty_tpl->tpl_vars['checkpoint']->value['time']-$_smarty_tpl->tpl_vars['first']->value['time'], null, 0);?>
                <?php }?>
                <tr>
                    <th width="10%">Memory</th>
                    <th width="10%">Files</th>
                    <th width="10%"v>Queries</th>
                    <th width="10%">Time</th>
                </tr>
                <tr>
                    <?php if ($_smarty_tpl->tpl_vars['first']->value) {?>
                        <td><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['cur_memory']->value), ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['checkpoint']->value['memory']), ENT_QUOTES, 'UTF-8');?>
)</td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_files']->value, ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkpoint']->value['included_files'], ENT_QUOTES, 'UTF-8');?>
)</td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_queries']->value, ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkpoint']->value['queries'], ENT_QUOTES, 'UTF-8');?>
)</td>
                        <td><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['cur_time']->value,"4"), ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['total_time']->value,"4"), ENT_QUOTES, 'UTF-8');?>
)</td>
                    <?php } else { ?>
                        <td><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['checkpoint']->value['memory']), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkpoint']->value['included_files'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkpoint']->value['queries'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td>0</td>
                        <?php $_smarty_tpl->tpl_vars["first"] = new Smarty_variable($_smarty_tpl->tpl_vars['checkpoint']->value, null, 0);?>
                    <?php }?>
                    <?php $_smarty_tpl->tpl_vars["previous"] = new Smarty_variable($_smarty_tpl->tpl_vars['checkpoint']->value, null, 0);?>
                </tr>
        </table>
    </div>
    <?php } ?>
<!--DebugToolbarTabLoggingContent--></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:views/debugger/components/logging_tab.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:views/debugger/components/logging_tab.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="deb-tab-content" id="DebugToolbarTabLoggingContent">
    <?php  $_smarty_tpl->tpl_vars["checkpoint"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["checkpoint"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["checkpoint"]->key => $_smarty_tpl->tpl_vars["checkpoint"]->value) {
$_smarty_tpl->tpl_vars["checkpoint"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["checkpoint"]->key;
?>
    <div class="table-wrapper">
        <table class="deb-table">
            <caption><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</caption>
                <?php if ($_smarty_tpl->tpl_vars['first']->value) {?>
                    <?php $_smarty_tpl->tpl_vars["cur_memory"] = new Smarty_variable($_smarty_tpl->tpl_vars['checkpoint']->value['memory']-$_smarty_tpl->tpl_vars['previous']->value['memory'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["cur_files"] = new Smarty_variable($_smarty_tpl->tpl_vars['checkpoint']->value['included_files']-$_smarty_tpl->tpl_vars['previous']->value['included_files'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["cur_queries"] = new Smarty_variable($_smarty_tpl->tpl_vars['checkpoint']->value['queries']-$_smarty_tpl->tpl_vars['previous']->value['queries'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["cur_time"] = new Smarty_variable($_smarty_tpl->tpl_vars['checkpoint']->value['time']-$_smarty_tpl->tpl_vars['previous']->value['time'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["total_time"] = new Smarty_variable($_smarty_tpl->tpl_vars['checkpoint']->value['time']-$_smarty_tpl->tpl_vars['first']->value['time'], null, 0);?>
                <?php }?>
                <tr>
                    <th width="10%">Memory</th>
                    <th width="10%">Files</th>
                    <th width="10%"v>Queries</th>
                    <th width="10%">Time</th>
                </tr>
                <tr>
                    <?php if ($_smarty_tpl->tpl_vars['first']->value) {?>
                        <td><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['cur_memory']->value), ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['checkpoint']->value['memory']), ENT_QUOTES, 'UTF-8');?>
)</td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_files']->value, ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkpoint']->value['included_files'], ENT_QUOTES, 'UTF-8');?>
)</td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_queries']->value, ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkpoint']->value['queries'], ENT_QUOTES, 'UTF-8');?>
)</td>
                        <td><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['cur_time']->value,"4"), ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['total_time']->value,"4"), ENT_QUOTES, 'UTF-8');?>
)</td>
                    <?php } else { ?>
                        <td><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['checkpoint']->value['memory']), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkpoint']->value['included_files'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkpoint']->value['queries'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td>0</td>
                        <?php $_smarty_tpl->tpl_vars["first"] = new Smarty_variable($_smarty_tpl->tpl_vars['checkpoint']->value, null, 0);?>
                    <?php }?>
                    <?php $_smarty_tpl->tpl_vars["previous"] = new Smarty_variable($_smarty_tpl->tpl_vars['checkpoint']->value, null, 0);?>
                </tr>
        </table>
    </div>
    <?php } ?>
<!--DebugToolbarTabLoggingContent--></div><?php }?><?php }} ?>
