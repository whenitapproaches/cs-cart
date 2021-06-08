<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 11:35:52
         compiled from "C:\xampp\htdocs\cs-jp\design\themes\responsive\templates\views\checkout\components\profile_fields\field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129566258960bed788db81c2-45176321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '906c0318eedf1e5e407c0df2424114eb744b2a99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\themes\\responsive\\templates\\views\\checkout\\components\\profile_fields\\field.tpl',
      1 => 1622772465,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '129566258960bed788db81c2-45176321',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'wrapper_class' => 0,
    'field_type_class_postfix' => 0,
    'field' => 0,
    'settings' => 0,
    'field_value' => 0,
    'field_id' => 0,
    'section' => 0,
    'input_meta' => 0,
    'field_name_helper' => 0,
    'field_name' => 0,
    'states' => 0,
    '_country' => 0,
    '_state' => 0,
    'state' => 0,
    'countries' => 0,
    'code' => 0,
    'country' => 0,
    'date_meta' => 0,
    'extra' => 0,
    'value' => 0,
    'name' => 0,
    'type' => 0,
    'label_meta' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bed788e72837_29802057',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bed788e72837_29802057')) {function content_60bed788e72837_29802057($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_modifier_render_tag_attrs')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\modifier.render_tag_attrs.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('select_state','select_country','address_residential','address_commercial','select_state','select_country','address_residential','address_commercial'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<div class="litecheckout__field <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wrapper_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_type_class_postfix']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::STATE")) {?>
        <?php $_smarty_tpl->tpl_vars['_country'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars['_state'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['field_value']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_state'] : $tmp), null, 0);?>

        <select <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            class="cm-state litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select <?php if ($_smarty_tpl->tpl_vars['section']->value=="S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }
if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-auto-save-on-change="true"
            aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
            <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php if ($_smarty_tpl->tpl_vars['field']->value['required']!=="Y") {?>
                <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['states']->value&&$_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>
                <?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
                    <option <?php if ($_smarty_tpl->tpl_vars['_state']->value==$_smarty_tpl->tpl_vars['state']->value['code']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            <?php }?>
        </select>

        <input
            <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            type="text"
            id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_d"
            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
            size="32"
            maxlength="64"
            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
"
            disabled="disabled"
            class="cm-state <?php if ($_smarty_tpl->tpl_vars['section']->value=="S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> ty-input-text litecheckout__input hidden<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-auto-save-on-change="true"
        />

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::COUNTRY")) {?>
        <?php $_smarty_tpl->tpl_vars['_country'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['field_value']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country'] : $tmp), null, 0);?>

        <select
            <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            class="ty-profile-field__select-country cm-country litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select <?php if ($_smarty_tpl->tpl_vars['section']->value=="S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-auto-save-on-change="true"
            aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
            <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:country_selectbox_items")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:country_selectbox_items"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['field']->value['required']!=="Y") {?>
                <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['country']->key;
?>
                <option <?php if ($_smarty_tpl->tpl_vars['_country']->value==$_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:country_selectbox_items"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </select>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA")) {?>
        <textarea class="litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
              id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
              autocomplete="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"
              name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
              placeholder=" "
              data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
              data-ca-lite-checkout-auto-save="true"
              aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
              title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
              <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

        ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
</textarea>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::CHECKBOX")) {?>
        <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
" data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['is_disabled']) {?>disabled="disabled"<?php }?> />
        <input class="litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
               id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
               type="checkbox"
               name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-auto-save="true"
               autocomplete="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"
               aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
               title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
               <?php if ($_smarty_tpl->tpl_vars['field_value']->value==smarty_modifier_enum("YesNo::YES")) {?>checked<?php }?>
               <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

        />
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::DATE")) {?>
        <?php ob_start();
echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['extra'] = new Smarty_variable("data-ca-lite-checkout-field=".((string)$_smarty_tpl->tpl_vars['field_name_helper']->value)." data-ca-lite-checkout-auto-save=true data-ca-lite-checkout-auto-save-on-change=true ".$_tmp1, null, 0);?>
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['field']->value['class']) {?><?php echo " ";?><?php echo (string)$_smarty_tpl->tpl_vars['field']->value['class'];?><?php }
$_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['date_meta'] = new Smarty_variable("litecheckout__input".$_tmp2.((string)$_smarty_tpl->tpl_vars['input_meta']->value), null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>((string)$_smarty_tpl->tpl_vars['field_id']->value),'date_name'=>$_smarty_tpl->tpl_vars['field_name']->value,'date_val'=>$_smarty_tpl->tpl_vars['field_value']->value,'date_meta'=>$_smarty_tpl->tpl_vars['date_meta']->value,'extra'=>$_smarty_tpl->tpl_vars['extra']->value), 0);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::RADIO")) {?>
        <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['name']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['name']->key;
 $_smarty_tpl->tpl_vars['name']->index++;
 $_smarty_tpl->tpl_vars['name']->first = $_smarty_tpl->tpl_vars['name']->index === 0;
?>
            <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
">
                <input class="radio litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
                   type="radio"
                   id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                   name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-lite-checkout-auto-save-on-change="true"
                   <?php if ((!$_smarty_tpl->tpl_vars['field_value']->value&&$_smarty_tpl->tpl_vars['name']->first)||$_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['value']->value) {?>checked<?php }?>
                   <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

                />
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>

            </label>
        <?php } ?>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX")) {?>
        <select class="litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
                autocomplete="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"
                id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-lite-checkout-auto-save-on-change="true"
                aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
                title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
                name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

        >
            <?php if ($_smarty_tpl->tpl_vars['field']->value['required']==smarty_modifier_enum("YesNo::NO")) {?>
                <option value="">--</option>
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['name']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['name']->key;
 $_smarty_tpl->tpl_vars['name']->index++;
 $_smarty_tpl->tpl_vars['name']->first = $_smarty_tpl->tpl_vars['name']->index === 0;
?>
                <option <?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['value']->value) {?>selected<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::ADDRESS_TYPE")) {?>
        <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_residential">
            <input class="radio litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
               type="radio"
               id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_residential"
               name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="residential"
               data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-auto-save-on-change="true"
               <?php if (!$_smarty_tpl->tpl_vars['field_value']->value||$_smarty_tpl->tpl_vars['field_value']->value=="residential") {?>checked<?php }?>
               <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

            />
            <?php echo $_smarty_tpl->__("address_residential");?>

        </label>
        <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_commercial">
            <input class="radio litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
                type="radio"
                id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_commercial"
                name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                value="commercial"
                data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-lite-checkout-auto-save-on-change="true"
                <?php if ($_smarty_tpl->tpl_vars['field_value']->value=="commercial") {?>checked<?php }?>
                <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

            />
            <?php echo $_smarty_tpl->__("address_commercial");?>

        </label>
    <?php } else { ?>
        
        <input class="litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::POSTAL_CODE")) {
if ($_smarty_tpl->tpl_vars['field']->value['class']=="shipping-zip-code") {?>jp_zipcode_change<?php }
}?>"
         
               placeholder=" "
               id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
               type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
"
               name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-auto-save="true"
               autocomplete="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"
               aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
               title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
               
               <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::POSTAL_CODE")) {?>
                   <?php if ($_smarty_tpl->tpl_vars['field']->value['class']=="shipping-zip-code") {?>
                    onkeyup="AjaxZip3.zip2addr(this,'','litecheckout_state','litecheckout_city','','user_data[s_address]');"
                   <?php } else { ?>
                    onkeyup="AjaxZip3.zip2addr(this,'','user_data[b_state]','user_data[b_city]','','user_data[b_address]');"
                   <?php }?>
               <?php }?>
               
               <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

        />
    <?php }?>
    <label class="litecheckout__label <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_meta']->value, ENT_QUOTES, 'UTF-8');?>
" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/profile_fields/field.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/profile_fields/field.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<div class="litecheckout__field <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wrapper_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_type_class_postfix']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::STATE")) {?>
        <?php $_smarty_tpl->tpl_vars['_country'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars['_state'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['field_value']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_state'] : $tmp), null, 0);?>

        <select <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            class="cm-state litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select <?php if ($_smarty_tpl->tpl_vars['section']->value=="S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }
if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-auto-save-on-change="true"
            aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
            <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php if ($_smarty_tpl->tpl_vars['field']->value['required']!=="Y") {?>
                <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['states']->value&&$_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>
                <?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
                    <option <?php if ($_smarty_tpl->tpl_vars['_state']->value==$_smarty_tpl->tpl_vars['state']->value['code']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            <?php }?>
        </select>

        <input
            <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            type="text"
            id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_d"
            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
            size="32"
            maxlength="64"
            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
"
            disabled="disabled"
            class="cm-state <?php if ($_smarty_tpl->tpl_vars['section']->value=="S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> ty-input-text litecheckout__input hidden<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-auto-save-on-change="true"
        />

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::COUNTRY")) {?>
        <?php $_smarty_tpl->tpl_vars['_country'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['field_value']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country'] : $tmp), null, 0);?>

        <select
            <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            class="ty-profile-field__select-country cm-country litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select <?php if ($_smarty_tpl->tpl_vars['section']->value=="S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-lite-checkout-auto-save-on-change="true"
            aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
            <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:country_selectbox_items")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:country_selectbox_items"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['field']->value['required']!=="Y") {?>
                <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['country']->key;
?>
                <option <?php if ($_smarty_tpl->tpl_vars['_country']->value==$_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:country_selectbox_items"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </select>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA")) {?>
        <textarea class="litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
              id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
              autocomplete="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"
              name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
              placeholder=" "
              data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
              data-ca-lite-checkout-auto-save="true"
              aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
              title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
              <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

        ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
</textarea>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::CHECKBOX")) {?>
        <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
" data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['is_disabled']) {?>disabled="disabled"<?php }?> />
        <input class="litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
               id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
               type="checkbox"
               name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-auto-save="true"
               autocomplete="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"
               aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
               title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
               <?php if ($_smarty_tpl->tpl_vars['field_value']->value==smarty_modifier_enum("YesNo::YES")) {?>checked<?php }?>
               <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

        />
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::DATE")) {?>
        <?php ob_start();
echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);
$_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['extra'] = new Smarty_variable("data-ca-lite-checkout-field=".((string)$_smarty_tpl->tpl_vars['field_name_helper']->value)." data-ca-lite-checkout-auto-save=true data-ca-lite-checkout-auto-save-on-change=true ".$_tmp3, null, 0);?>
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['field']->value['class']) {?><?php echo " ";?><?php echo (string)$_smarty_tpl->tpl_vars['field']->value['class'];?><?php }
$_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['date_meta'] = new Smarty_variable("litecheckout__input".$_tmp4.((string)$_smarty_tpl->tpl_vars['input_meta']->value), null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>((string)$_smarty_tpl->tpl_vars['field_id']->value),'date_name'=>$_smarty_tpl->tpl_vars['field_name']->value,'date_val'=>$_smarty_tpl->tpl_vars['field_value']->value,'date_meta'=>$_smarty_tpl->tpl_vars['date_meta']->value,'extra'=>$_smarty_tpl->tpl_vars['extra']->value), 0);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::RADIO")) {?>
        <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['name']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['name']->key;
 $_smarty_tpl->tpl_vars['name']->index++;
 $_smarty_tpl->tpl_vars['name']->first = $_smarty_tpl->tpl_vars['name']->index === 0;
?>
            <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
">
                <input class="radio litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
                   type="radio"
                   id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                   name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-lite-checkout-auto-save-on-change="true"
                   <?php if ((!$_smarty_tpl->tpl_vars['field_value']->value&&$_smarty_tpl->tpl_vars['name']->first)||$_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['value']->value) {?>checked<?php }?>
                   <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

                />
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>

            </label>
        <?php } ?>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX")) {?>
        <select class="litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
                autocomplete="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"
                id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-lite-checkout-auto-save-on-change="true"
                aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
                title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
                name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

        >
            <?php if ($_smarty_tpl->tpl_vars['field']->value['required']==smarty_modifier_enum("YesNo::NO")) {?>
                <option value="">--</option>
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['name']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['name']->key;
 $_smarty_tpl->tpl_vars['name']->index++;
 $_smarty_tpl->tpl_vars['name']->first = $_smarty_tpl->tpl_vars['name']->index === 0;
?>
                <option <?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['value']->value) {?>selected<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::ADDRESS_TYPE")) {?>
        <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_residential">
            <input class="radio litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
               type="radio"
               id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_residential"
               name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="residential"
               data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-auto-save-on-change="true"
               <?php if (!$_smarty_tpl->tpl_vars['field_value']->value||$_smarty_tpl->tpl_vars['field_value']->value=="residential") {?>checked<?php }?>
               <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

            />
            <?php echo $_smarty_tpl->__("address_residential");?>

        </label>
        <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_commercial">
            <input class="radio litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
                type="radio"
                id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
_commercial"
                name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                value="commercial"
                data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-lite-checkout-auto-save-on-change="true"
                <?php if ($_smarty_tpl->tpl_vars['field_value']->value=="commercial") {?>checked<?php }?>
                <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

            />
            <?php echo $_smarty_tpl->__("address_commercial");?>

        </label>
    <?php } else { ?>
        
        <input class="litecheckout__input<?php if ($_smarty_tpl->tpl_vars['field']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['input_meta']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::POSTAL_CODE")) {
if ($_smarty_tpl->tpl_vars['field']->value['class']=="shipping-zip-code") {?>jp_zipcode_change<?php }
}?>"
         
               placeholder=" "
               id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"
               type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
"
               name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-field="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
"
               data-ca-lite-checkout-auto-save="true"
               autocomplete="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"
               aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
               title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
               
               <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::POSTAL_CODE")) {?>
                   <?php if ($_smarty_tpl->tpl_vars['field']->value['class']=="shipping-zip-code") {?>
                    onkeyup="AjaxZip3.zip2addr(this,'','litecheckout_state','litecheckout_city','','user_data[s_address]');"
                   <?php } else { ?>
                    onkeyup="AjaxZip3.zip2addr(this,'','user_data[b_state]','user_data[b_city]','','user_data[b_address]');"
                   <?php }?>
               <?php }?>
               
               <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['field']->value['attributes']);?>

        />
    <?php }?>
    <label class="litecheckout__label <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_meta']->value, ENT_QUOTES, 'UTF-8');?>
" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label>
</div><?php }?><?php }} ?>
