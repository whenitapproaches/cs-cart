<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:30:06
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\views\order_management\components\shipping_method.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84869734360bf70de4fd6b5-94915321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0046a7b4921927ea275b0bea0f2495a3294c4542' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\views\\order_management\\components\\shipping_method.tpl',
      1 => 1519008692,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '84869734360bf70de4fd6b5-94915321',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_groups' => 0,
    'group' => 0,
    'group_key' => 0,
    'shipping' => 0,
    'cart' => 0,
    'delivery_timing_shipping_id' => 0,
    'previous_delivery_info' => 0,
    'delivery_timing' => 0,
    'previous_delivery_date' => 0,
    'delivery_date_table' => 0,
    'flg_selected_date_matched' => 0,
    'delivery_timetable' => 0,
    'previous_delivery_timing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70de524cc3_68755013',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70de524cc3_68755013')) {function content_60bf70de524cc3_68755013($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_count')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\modifier.count.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('shipping_method','none','jp_delivery_date','jp_shipping_delivery_time','no_shipping_required','text_no_shipping_methods','text_no_shipping_methods'));
?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"order_management:shipping_method")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"order_management:shipping_method"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="control-group">
    <div class="control-label">
        <h4 class="subheader"><?php echo $_smarty_tpl->__("shipping_method");?>
</h4>
    </div>
</div>
    <?php if ($_smarty_tpl->tpl_vars['product_groups']->value) {?>
        <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['group_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['group_key']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
            <div class="control-group">
            <label class="control-label"> <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['group']->value['name'])===null||$tmp==='' ? $_smarty_tpl->__("none") : $tmp), ENT_QUOTES, 'UTF-8');?>
</label>
            <?php if ($_smarty_tpl->tpl_vars['group']->value['shippings']&&!$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                <div class="controls">
                    <select name="shipping_ids[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
]" class="cm-submit cm-ajax cm-skip-validation" data-ca-dispatch="dispatch[order_management.update_shipping]">
                    <?php  $_smarty_tpl->tpl_vars['shipping'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shipping']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['shippings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->key => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->_loop = true;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value]==$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['delivery_time'], ENT_QUOTES, 'UTF-8');?>
) - <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['rate']), 0);?>
</option>
                    <?php } ?>
                    </select>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value]) {?>
                    <?php $_smarty_tpl->tpl_vars["delivery_timing_shipping_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value], null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["delivery_timing_shipping_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], null, 0);?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['cart']->value['order_id']>0&&$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']>0) {?>
                    <?php $_smarty_tpl->tpl_vars["previous_delivery_info"] = new Smarty_variable(fn_lcjp_get_order_delivery_info($_smarty_tpl->tpl_vars['cart']->value['order_id'],$_smarty_tpl->tpl_vars['delivery_timing_shipping_id']->value,$_smarty_tpl->tpl_vars['group_key']->value), null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['previous_delivery_info']->value['delivery_date']) {?>
                        <?php $_smarty_tpl->tpl_vars["previous_delivery_date"] = new Smarty_variable($_smarty_tpl->tpl_vars['previous_delivery_info']->value['delivery_date'], null, 0);?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['previous_delivery_info']->value['delivery_timing']) {?>
                        <?php $_smarty_tpl->tpl_vars["previous_delivery_timing"] = new Smarty_variable($_smarty_tpl->tpl_vars['previous_delivery_info']->value['delivery_timing'], null, 0);?>
                    <?php }?>
                <?php }?>

                <?php $_smarty_tpl->tpl_vars["delivery_timing"] = new Smarty_variable(fn_lcjp_get_delivery_timing($_smarty_tpl->tpl_vars['delivery_timing_shipping_id']->value), null, 0);?>

                <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['delivery_timing']->value)) {?>
                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['delivery_timing']->value['delivery_date_array'])) {?>
                        <div class="control-group">
                            <label class="control-label"><?php echo $_smarty_tpl->__("jp_delivery_date");?>
</label>
                            <select id="delivery_date_selected_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" name="delivery_date_selected_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_timing_shipping_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <?php  $_smarty_tpl->tpl_vars["delivery_date_table"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["delivery_date_table"]->_loop = false;
 $_smarty_tpl->tpl_vars["daykey"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['delivery_timing']->value['delivery_date_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["delivery_date_table"]->key => $_smarty_tpl->tpl_vars["delivery_date_table"]->value) {
$_smarty_tpl->tpl_vars["delivery_date_table"]->_loop = true;
 $_smarty_tpl->tpl_vars["daykey"]->value = $_smarty_tpl->tpl_vars["delivery_date_table"]->key;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['previous_delivery_date']->value==$_smarty_tpl->tpl_vars['delivery_date_table']->value) {?>
                                        <?php $_smarty_tpl->tpl_vars["flg_selected_date_matched"] = new Smarty_variable("Y", null, 0);?>
                                    <?php }?>
                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_date_table']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['previous_delivery_date']->value==$_smarty_tpl->tpl_vars['delivery_date_table']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_date_table']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                                <?php } ?>
                                <?php if (!$_smarty_tpl->tpl_vars['flg_selected_date_matched']->value||$_smarty_tpl->tpl_vars['flg_selected_date_matched']->value!="Y") {?>
                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['previous_delivery_date']->value, ENT_QUOTES, 'UTF-8');?>
" selected="selected"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['previous_delivery_date']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                                <?php }?>
                            </select>
                        </div>
                    <?php }?>

                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['delivery_timing']->value['delivery_time_array'])) {?>
                        <div class="control-group">
                            <label class="control-label"><?php echo $_smarty_tpl->__("jp_shipping_delivery_time");?>
</label>
                            <select id="delivery_time_selected_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" name="delivery_time_selected_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_timing_shipping_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <?php  $_smarty_tpl->tpl_vars["delivery_timetable"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["delivery_timetable"]->_loop = false;
 $_smarty_tpl->tpl_vars["timekey"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['delivery_timing']->value['delivery_time_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["delivery_timetable"]->key => $_smarty_tpl->tpl_vars["delivery_timetable"]->value) {
$_smarty_tpl->tpl_vars["delivery_timetable"]->_loop = true;
 $_smarty_tpl->tpl_vars["timekey"]->value = $_smarty_tpl->tpl_vars["delivery_timetable"]->key;
?>
                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_timetable']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['previous_delivery_timing']->value==$_smarty_tpl->tpl_vars['delivery_timetable']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_timetable']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                                <?php } ?>
                            </select>
                        </div>
                    <?php }?>
                <?php }?>

            <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>
                <?php echo $_smarty_tpl->__("no_shipping_required");?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->__("text_no_shipping_methods");?>

                <?php $_smarty_tpl->tpl_vars["is_empty_rates"] = new Smarty_variable("Y", null, 0);?>
            <?php }?>
            </div>
        <?php } ?>
    <?php } else { ?>
        <span class="text-error"><?php echo $_smarty_tpl->__("text_no_shipping_methods");?>
</span>
    <?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"order_management:shipping_method"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
