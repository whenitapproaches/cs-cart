<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 18:01:20
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\addons\paypal\hooks\payments\properties.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67129070460bf31e055e8b1-71278482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f016335209ac9d50472d2fc60493423f35050765' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\addons\\paypal\\hooks\\payments\\properties.post.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '67129070460bf31e055e8b1-71278482',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf31e0562e90_60546487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf31e0562e90_60546487')) {function content_60bf31e0562e90_60546487($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\block.inline_script.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    (function (_, $) {
        _.paypal_processor_ids = <?php echo json_encode(fn_get_paypal_processors(''));?>
;

        $.ceEvent('on', 'ce.ajaxdone', function (elms, inline_scripts, params, data, response_text) {
            for (var i in elms) {
                fn_paypal_add_redesign_handlers(_);
                fn_paypal_perform_redesign(
                    _,
                    $('[data-ca-form-group="main"]', elms[i]),
                    $('[data-ca-form-group="processor"] select', elms[i]).val()
                );
            }
        });

        $(document).ready(function () {
            fn_paypal_add_redesign_handlers(_);
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
