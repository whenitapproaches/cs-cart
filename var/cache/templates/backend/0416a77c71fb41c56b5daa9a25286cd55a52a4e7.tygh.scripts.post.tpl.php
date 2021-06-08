<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 18:01:22
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\addons\tech_support_chat\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124661090260bf31e26e2859-48920921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0416a77c71fb41c56b5daa9a25286cd55a52a4e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\addons\\tech_support_chat\\hooks\\index\\scripts.post.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '124661090260bf31e26e2859-48920921',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf31e26e79c8_23221401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf31e26e79c8_23221401')) {function content_60bf31e26e79c8_23221401($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\block.inline_script.php';
?><?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['auth']->value['user_type']=="A"&&$_smarty_tpl->tpl_vars['auth']->value['is_root']=="Y"&&$_SESSION['tech_support_chat_widget_id']) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
        var __REPLAIN_ = '<?php echo htmlspecialchars(strtr($_SESSION['tech_support_chat_widget_id'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
';
        
        (function (u) {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = u;
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })('https://widget.replain.cc/dist/client.js');
        
    <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
