<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:30:06
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\views\order_management\components\status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79499929760bf70de290650-12934844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61b4d1366c56e68e0ffbb45eb73b7ee73428ee2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\views\\order_management\\components\\status.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '79499929760bf70de290650-12934844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_statuses' => 0,
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70de2988a1_95880397',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70de2988a1_95880397')) {function content_60bf70de2988a1_95880397($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('status'));
?>
<?php if (fn_check_view_permissions("orders.update_status","POST")) {?>
<div class="control-group">
	<div class="control-label"><h4 class="subheader"><?php echo $_smarty_tpl->__("status");?>
</h4></div>
	<div class="controls">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"order_management:order_status")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"order_management:order_status"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		  <?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"field",'items'=>$_smarty_tpl->tpl_vars['order_statuses']->value,'select_container_name'=>"order_status",'selected_key'=>(($tmp = @$_smarty_tpl->tpl_vars['cart']->value['order_status'])===null||$tmp==='' ? "O" : $tmp)), 0);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"order_management:order_status"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</div>
</div>
<?php }?><?php }} ?>
