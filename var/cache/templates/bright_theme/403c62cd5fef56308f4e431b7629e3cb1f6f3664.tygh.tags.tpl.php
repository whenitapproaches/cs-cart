<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 21:12:26
         compiled from "C:\xampp\htdocs\cs-jp\design\themes\responsive\templates\addons\tags\views\tags\components\tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189768525860bf5eaa6b6426-56172127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '403c62cd5fef56308f4e431b7629e3cb1f6f3664' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\themes\\responsive\\templates\\addons\\tags\\views\\tags\\components\\tags.tpl',
      1 => 1622772506,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '189768525860bf5eaa6b6426-56172127',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'object' => 0,
    'tag' => 0,
    'tag_name' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf5eaa6c3e21_30998594',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf5eaa6c3e21_30998594')) {function content_60bf5eaa6c3e21_30998594($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['object']->value['tags']) {?>
<div id="content_tags_tab">
    <div class="ty-control-group">
        <ul class="ty-tags-list clearfix">
            <?php  $_smarty_tpl->tpl_vars["tag"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tag"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['object']->value['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tag"]->key => $_smarty_tpl->tpl_vars["tag"]->value) {
$_smarty_tpl->tpl_vars["tag"]->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars['tag_name'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['tag']->value['tag']), null, 0);?>
                <li class="ty-tags-list__item">
                    <a class="ty-tags-list__a" href="<?php echo htmlspecialchars(fn_url("tags.view?tag=".((string)$_smarty_tpl->tpl_vars['tag_name']->value)), ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>

                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>  
</div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/tags/views/tags/components/tags.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/tags/views/tags/components/tags.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['object']->value['tags']) {?>
<div id="content_tags_tab">
    <div class="ty-control-group">
        <ul class="ty-tags-list clearfix">
            <?php  $_smarty_tpl->tpl_vars["tag"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tag"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['object']->value['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tag"]->key => $_smarty_tpl->tpl_vars["tag"]->value) {
$_smarty_tpl->tpl_vars["tag"]->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars['tag_name'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['tag']->value['tag']), null, 0);?>
                <li class="ty-tags-list__item">
                    <a class="ty-tags-list__a" href="<?php echo htmlspecialchars(fn_url("tags.view?tag=".((string)$_smarty_tpl->tpl_vars['tag_name']->value)), ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>

                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>  
</div>
<?php }
}?><?php }} ?>
