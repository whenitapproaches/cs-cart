<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:55:00
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\views\debugger\components\request_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191304252560bf76b43bc667-71568474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49dfc9cffc2d353563d9855ea3311a498811e547' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\views\\debugger\\components\\request_tab.tpl',
      1 => 1560233860,
      2 => 'backend',
    ),
  ),
  'nocache_hash' => '191304252560bf76b43bc667-71568474',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'data' => 0,
    'name' => 0,
    'value' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf76b43f1499_71783352',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf76b43f1499_71783352')) {function content_60bf76b43f1499_71783352($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="deb-tab-content" id="DebugToolbarTabRequestContent">
    <div class="table-wrapper">
        <table class="deb-table">
            <caption>REQUEST</caption>
            <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['request']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
                <tr>
                    <td width="20%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <div class="table-wrapper">
        <table class="deb-table">
            <caption>SERVER</caption>
            <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['server']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
                <tr>
                    <td width="20%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <div class="table-wrapper">
        <table class="deb-table">
            <caption>COOKIE</caption>
            <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['cookie']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
                <tr>
                    <td width="20%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
            <?php } ?>
        </table>
    </div>
<!--DebugToolbarTabRequestContent--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:views/debugger/components/request_tab.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:views/debugger/components/request_tab.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="deb-tab-content" id="DebugToolbarTabRequestContent">
    <div class="table-wrapper">
        <table class="deb-table">
            <caption>REQUEST</caption>
            <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['request']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
                <tr>
                    <td width="20%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <div class="table-wrapper">
        <table class="deb-table">
            <caption>SERVER</caption>
            <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['server']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
                <tr>
                    <td width="20%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <div class="table-wrapper">
        <table class="deb-table">
            <caption>COOKIE</caption>
            <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['cookie']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
                <tr>
                    <td width="20%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
            <?php } ?>
        </table>
    </div>
<!--DebugToolbarTabRequestContent--></div>
<?php }?><?php }} ?>
