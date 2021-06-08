<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:56
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\views\products\components\products_shipping_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214514261260bf70d49f46a5-71770045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc1170b6f1872030d7e2f3784fe4874694c46afd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\views\\products\\components\\products_shipping_settings.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '214514261260bf70d49f46a5-71770045',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'product_data' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'box_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70d4a0b525_95876032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70d4a0b525_95876032')) {function content_60bf70d4a0b525_95876032($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('general','weight','tt_views_products_components_products_shipping_settings_weight','free_shipping','tt_views_products_components_products_shipping_settings_free_shipping','shipping_freight','items_in_box','tt_views_products_components_products_shipping_settings_items_in_box','box_length','box_width','box_height'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("general")), 0);?>


<div class="control-group">
    <label class="control-label" for="product_weight"><?php echo $_smarty_tpl->__("weight");?>
 (<?php echo $_smarty_tpl->tpl_vars['settings']->value['General']['weight_symbol'];?>
)<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_views_products_components_products_shipping_settings_weight")), 0);?>
:</label>
    <div class="controls">
        <input type="text" name="product_data[weight]" id="product_weight" size="10" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['weight'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-long" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="product_free_shipping"><?php echo $_smarty_tpl->__("free_shipping");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_views_products_components_products_shipping_settings_free_shipping")), 0);?>
:</label>
    <div class="controls">
        <input type="hidden" name="product_data[free_shipping]" value="N" />
        <input type="checkbox" name="product_data[free_shipping]" id="product_free_shipping" value="Y" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['free_shipping']=="Y") {?>checked="checked"<?php }?> />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="product_shipping_freight"><?php echo $_smarty_tpl->__("shipping_freight");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
):</label>
    <div class="controls">
        <input type="text" name="product_data[shipping_freight]" id="product_shipping_freight" size="10" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['shipping_freight'])===null||$tmp==='' ? "0.00" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-long" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="product_items_in_box"><?php echo $_smarty_tpl->__("items_in_box");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_views_products_components_products_shipping_settings_items_in_box")), 0);?>
:</label>
    <div class="controls">
        <input type="text" name="product_data[min_items_in_box]" id="product_items_in_box" size="5" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['min_items_in_box'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-micro" onkeyup="fn_product_shipping_settings(this);" />
        &nbsp;-&nbsp;
        <input type="text" name="product_data[max_items_in_box]" size="5" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['max_items_in_box'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-micro" onkeyup="fn_product_shipping_settings(this);" />
    </div>
    
    <?php if ($_smarty_tpl->tpl_vars['product_data']->value['min_items_in_box']>0||$_smarty_tpl->tpl_vars['product_data']->value['max_items_in_box']) {?>
        <?php $_smarty_tpl->tpl_vars["box_settings"] = new Smarty_variable(true, null, 0);?>
    <?php }?>
</div>

<div class="control-group">
    <label class="control-label" for="product_box_length"><?php echo $_smarty_tpl->__("box_length");?>
:</label>
    <div class="controls">
        <input type="text" name="product_data[box_length]" id="product_box_length" size="10" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['box_length'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-long shipping-dependence" <?php if (!$_smarty_tpl->tpl_vars['box_settings']->value) {?>disabled="disabled"<?php }?> />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="product_box_width"><?php echo $_smarty_tpl->__("box_width");?>
:</label>
    <div class="controls">
        <input type="text" name="product_data[box_width]" id="product_box_width" size="10" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['box_width'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-long shipping-dependence" <?php if (!$_smarty_tpl->tpl_vars['box_settings']->value) {?>disabled="disabled"<?php }?> />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="product_box_height"><?php echo $_smarty_tpl->__("box_height");?>
:</label>
    <div class="controls">
        <input type="text" name="product_data[box_height]" id="product_box_height" size="10" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['box_height'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-long shipping-dependence" <?php if (!$_smarty_tpl->tpl_vars['box_settings']->value) {?>disabled="disabled"<?php }?> />
    </div>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">

function fn_product_shipping_settings(elm)
{
    var jelm = Tygh.$(elm);
    var available = false;
    
    Tygh.$('input', jelm.parent()).each(function() {
        if (parseInt(Tygh.$(this).val()) > 0) {
            available = true;
        }
    });
    
    Tygh.$('input.shipping-dependence').prop('disabled', (available ? false : true));
    
}


<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
