<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 21:12:15
         compiled from "C:\xampp\htdocs\cs-jp\design\themes\responsive\templates\blocks\wrappers\onclick_dropdown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99989944560bf5e9f96b6e5-93272657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61ccf81496be1573fb1f84cb71e2efc401453036' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\themes\\responsive\\templates\\blocks\\wrappers\\onclick_dropdown.tpl',
      1 => 1622772464,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '99989944560bf5e9f96b6e5-93272657',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'content' => 0,
    'block' => 0,
    'content_alignment' => 0,
    'dropdown_id' => 0,
    'header_class' => 0,
    'title' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf5e9f982db7_69662681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf5e9f982db7_69662681')) {function content_60bf5e9f982db7_69662681($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <?php $_smarty_tpl->tpl_vars["dropdown_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['snapping_id'], null, 0);?>
    <div class="ty-dropdown-box <?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['content_alignment']->value=="RIGHT") {?> ty-float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value=="LEFT") {?> ty-float-left<?php }?>">
        <div id="sw_dropdown_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-dropdown-box__title cm-combination <?php if ($_smarty_tpl->tpl_vars['header_class']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['header_class']->value, ENT_QUOTES, 'UTF-8');
}?>">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"wrapper:onclick_dropdown_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"wrapper:onclick_dropdown_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if (trim(Smarty::$_smarty_vars['capture']['title'])) {?>
                <?php echo Smarty::$_smarty_vars['capture']['title'];?>

            <?php } else { ?>
                <a><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
            <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"wrapper:onclick_dropdown_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
        <div id="dropdown_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-popup-box ty-dropdown-box__content hidden">
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? "&nbsp;" : $tmp);?>

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
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/wrappers/onclick_dropdown.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/wrappers/onclick_dropdown.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <?php $_smarty_tpl->tpl_vars["dropdown_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['snapping_id'], null, 0);?>
    <div class="ty-dropdown-box <?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['content_alignment']->value=="RIGHT") {?> ty-float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value=="LEFT") {?> ty-float-left<?php }?>">
        <div id="sw_dropdown_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-dropdown-box__title cm-combination <?php if ($_smarty_tpl->tpl_vars['header_class']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['header_class']->value, ENT_QUOTES, 'UTF-8');
}?>">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"wrapper:onclick_dropdown_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"wrapper:onclick_dropdown_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if (trim(Smarty::$_smarty_vars['capture']['title'])) {?>
                <?php echo Smarty::$_smarty_vars['capture']['title'];?>

            <?php } else { ?>
                <a><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
            <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"wrapper:onclick_dropdown_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
        <div id="dropdown_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-popup-box ty-dropdown-box__content hidden">
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? "&nbsp;" : $tmp);?>

        </div>
    </div>
<?php }
}?><?php }} ?>
