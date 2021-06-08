<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:06
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\views\auth\login_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118484952360bf70a24b18f9-77994940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac117a15d247867ebc3ef9bcf5efcf1abd874ce4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\views\\auth\\login_form.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '118484952360bf70a24b18f9-77994940',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stored_user_login' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70a24f66d7_95634529',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70a24f66d7_95634529')) {function content_60bf70a24f66d7_95634529($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('administration_panel','email','password','forgot_password_question'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"auth:login_form")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"auth:login_form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="modal signin-modal">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="main_login_form" class=" cm-skip-check-items cm-check-changes">
        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars(fn_query_remove(fn_url($_REQUEST['return_url'],"A","rel"),"return_url"), ENT_QUOTES, 'UTF-8');?>
">
        <div class="modal-header">
            <h4><?php echo $_smarty_tpl->__("administration_panel");?>
</h4>
        </div>
        <div class="modal-body">
            <div class="control-group">
                <label for="username" class="cm-trim cm-required cm-email"><?php echo $_smarty_tpl->__("email");?>
:</label>
                <input id="username" type="text" name="user_login" size="20" value="<?php if ($_smarty_tpl->tpl_vars['stored_user_login']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['stored_user_login']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['demo_username'], ENT_QUOTES, 'UTF-8');
}?>" class="cm-focus" tabindex="1">
            </div>
            <div class="control-group">
                <label for="password" class="cm-required"><?php echo $_smarty_tpl->__("password");?>
:</label>
                <input type="password" id="password" name="password" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['demo_password'], ENT_QUOTES, 'UTF-8');?>
" tabindex="2" maxlength="32">
            </div>
        </div>
        <div class="modal-footer">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/sign_in.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[auth.login]",'but_role'=>"button_main",'tabindex'=>"3"), 0);?>

            <a href="<?php echo htmlspecialchars(fn_url("auth.recover_password"), ENT_QUOTES, 'UTF-8');?>
" class="pull-right"><?php echo $_smarty_tpl->__("forgot_password_question");?>
</a>
        </div>
    </form>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"auth:login_form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
