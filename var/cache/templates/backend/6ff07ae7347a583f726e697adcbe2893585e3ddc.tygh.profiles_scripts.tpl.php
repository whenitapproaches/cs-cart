<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 18:01:53
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\views\profiles\components\profiles_scripts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106568634460bf3201255d09-80715405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ff07ae7347a583f726e697adcbe2893585e3ddc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\views\\profiles\\components\\profiles_scripts.tpl',
      1 => 1560399496,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '106568634460bf3201255d09-80715405',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'states' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf320125dad0_40248532',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf320125dad0_40248532')) {function content_60bf320125dad0_40248532($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\block.inline_script.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
(function(_, $) {

    /* Do not put this code to document.ready, because it should be
       initialized first
    */
    $.ceRebuildStates('init', {
        default_country: '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
        states: <?php echo json_encode($_smarty_tpl->tpl_vars['states']->value);?>

    });


    
    $.ceFormValidator('setZipcode', {
        US: {
            regexp: /^(\d{5})(-\d{4})?$/,
            format: '01342 (01342-5678)'
        },
        CA: {
            regexp: /^(\w{3} ?\w{3})$/,
            format: 'K1A OB1 (K1AOB1)'
        },
        RU: {
            regexp: /^(\d{6})?$/,
            format: '123456'
        /* Modified by tommy from cs-cart.jp 2017 BOF */
        },
        JP: {
            regexp: /(^\d{3}\-\d{4}$)|(^\d{7}$)/,
            format: '123-4567 or 1234567'
        }
        /* Modified by tommy from cs-cart.jp 2017 EOF */
    });
    

}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
