<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 18:01:28
         compiled from "C:\xampp\htdocs\cs-jp\design\themes\responsive\templates\views\checkout\components\profile_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63232285960bf31e8998ff1-04932422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eacf02915812a5b2ef61dbd0c1623f6f55e170fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\themes\\responsive\\templates\\views\\checkout\\components\\profile_fields.tpl',
      1 => 1622772465,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '63232285960bf31e8998ff1-04932422',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'section' => 0,
    'profile_fields' => 0,
    'disable_all_fields' => 0,
    'exclude' => 0,
    'field' => 0,
    'include' => 0,
    'name_field_names' => 0,
    'field_id' => 0,
    'name_fields' => 0,
    'fullname_exists' => 0,
    'fullname_field' => 0,
    'prefix' => 0,
    'fullname_field_lastname_first' => 0,
    'user_data' => 0,
    'name_field_id' => 0,
    'fields' => 0,
    'field_type_class_postfix' => 0,
    'label_meta' => 0,
    'fullname_field_value' => 0,
    'wrapper_class' => 0,
    'field_name' => 0,
    'input_meta' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf31e8a206b1_90984653',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf31e8a206b1_90984653')) {function content_60bf31e8a206b1_90984653($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_modifier_count')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\modifier.count.php';
if (!is_callable('smarty_modifier_sort_by')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\modifier.sort_by.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php if ($_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value]) {?>
    <?php $_smarty_tpl->tpl_vars['disable_all_fields'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['disable_all_fields']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['fields'] = new Smarty_variable(array(), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['name_fields'] = new Smarty_variable(array(), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['name_field_names'] = new Smarty_variable(array("firstname","lastname","s_firstname","s_lastname","b_firstname","b_lastname"), null, 0);?>

    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['field_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['field_id']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['exclude']->value&&in_array($_smarty_tpl->tpl_vars['field']->value['field_name'],$_smarty_tpl->tpl_vars['exclude']->value)||$_smarty_tpl->tpl_vars['include']->value&&!in_array($_smarty_tpl->tpl_vars['field']->value['field_name'],$_smarty_tpl->tpl_vars['include']->value)) {?>
            <?php continue 1;?>
        <?php }?>

        <?php if (in_array($_smarty_tpl->tpl_vars['field']->value['field_name'],$_smarty_tpl->tpl_vars['name_field_names']->value)) {?>
            <?php $_smarty_tpl->createLocalArrayVariable('name_fields', null, 0);
$_smarty_tpl->tpl_vars['name_fields']->value[$_smarty_tpl->tpl_vars['field_id']->value] = $_smarty_tpl->tpl_vars['field']->value;?>
        <?php } else { ?>
            <?php $_smarty_tpl->createLocalArrayVariable('fields', null, 0);
$_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['field_id']->value] = $_smarty_tpl->tpl_vars['field']->value;?>
        <?php }?>
    <?php } ?>

    <?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable('', null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['section']->value==smarty_modifier_enum("ProfileFieldSections::SHIPPING_ADDRESS")) {?>
        <?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable("s_", null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['section']->value==smarty_modifier_enum("ProfileFieldSections::BILLING_ADDRESS")) {?>
        <?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable("b_", null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['fullname_exists'] = new Smarty_variable(smarty_modifier_count($_smarty_tpl->tpl_vars['name_fields']->value)==2, null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['fullname_exists']->value) {?>
        <?php $_smarty_tpl->tpl_vars['fullname_field'] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['name_fields']->value), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['name_field_id'] = new Smarty_variable(key($_smarty_tpl->tpl_vars['name_fields']->value), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['fullname_field_lastname_first'] = new Smarty_variable(in_array($_smarty_tpl->tpl_vars['fullname_field']->value['field_name'],array("lastname","s_lastname","b_lastname")), null, 0);?>
        <?php $_smarty_tpl->createLocalArrayVariable('fullname_field', null, 0);
$_smarty_tpl->tpl_vars['fullname_field']->value["field_name"] = ((string)$_smarty_tpl->tpl_vars['prefix']->value)."fullname";?>
        <?php if ($_smarty_tpl->tpl_vars['fullname_field_lastname_first']->value) {?>
            <?php $_smarty_tpl->tpl_vars['fullname_field_value'] = new Smarty_variable(trim(((string)$_smarty_tpl->tpl_vars['user_data']->value[((string)$_smarty_tpl->tpl_vars['prefix']->value)."lastname"])." ".((string)$_smarty_tpl->tpl_vars['user_data']->value[((string)$_smarty_tpl->tpl_vars['prefix']->value)."firstname"])), null, 0);?>
            <?php $_smarty_tpl->createLocalArrayVariable('fullname_field', null, 0);
$_smarty_tpl->tpl_vars['fullname_field']->value['description'] = $_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['prefix']->value)."last_name_and_first_name");?>
            <?php $_smarty_tpl->createLocalArrayVariable('fullname_field', null, 0);
$_smarty_tpl->tpl_vars['fullname_field']->value['attributes'] = array("data-ca-fullname-format"=>"lastname_first");?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['fullname_field_value'] = new Smarty_variable(trim(((string)$_smarty_tpl->tpl_vars['user_data']->value[((string)$_smarty_tpl->tpl_vars['prefix']->value)."firstname"])." ".((string)$_smarty_tpl->tpl_vars['user_data']->value[((string)$_smarty_tpl->tpl_vars['prefix']->value)."lastname"])), null, 0);?>
            <?php $_smarty_tpl->createLocalArrayVariable('fullname_field', null, 0);
$_smarty_tpl->tpl_vars['fullname_field']->value['description'] = $_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['prefix']->value)."first_name_and_last_name");?>
            <?php $_smarty_tpl->createLocalArrayVariable('fullname_field', null, 0);
$_smarty_tpl->tpl_vars['fullname_field']->value['attributes'] = array("data-ca-fullname-format"=>"firstname_first");?>
        <?php }?>
        <?php $_smarty_tpl->createLocalArrayVariable('fields', null, 0);
$_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['name_field_id']->value] = $_smarty_tpl->tpl_vars['fullname_field']->value;?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['fields'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields']->value+$_smarty_tpl->tpl_vars['name_fields']->value, null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['fields'] = new Smarty_variable(smarty_modifier_sort_by($_smarty_tpl->tpl_vars['fields']->value,"#position"), null, 0);?>

    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['field_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['field_id']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
        <?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable("text", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['input_meta'] = new Smarty_variable('', null, 0);?>
        <?php $_smarty_tpl->tpl_vars['label_meta'] = new Smarty_variable('', null, 0);?>

        <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable("litecheckout__field--", null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::PHONE")) {?>
            <?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable("tel", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['label_meta'] = new Smarty_variable(" cm-mask-phone-label", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['input_meta'] = new Smarty_variable(" cm-mask-phone", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."input", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::EMAIL")) {?>
            <?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable("text", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['label_meta'] = new Smarty_variable(" cm-email", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."input", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::STATE")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."state", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::COUNTRY")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."country", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::CHECKBOX")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."checkbox", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::DATE")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."date", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::INPUT")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."input", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::PASSWORD")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."password", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::RADIO")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."radio", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."selectbox", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."textarea", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::POSTAL_CODE")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."input", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::ADDRESS_TYPE")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."radio", null, 0);?>
        <?php }?>

        
        <?php if ($_smarty_tpl->tpl_vars['field_type_class_postfix']->value==="litecheckout__field--") {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."custom", null, 0);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['checkout_required']=="Y"||$_smarty_tpl->tpl_vars['field']->value['checkout_required']=="1") {?>
            <?php $_smarty_tpl->tpl_vars['label_meta'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['label_meta']->value)." cm-required", null, 0);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['is_default']==smarty_modifier_enum("YesNo::YES")) {?>
            <?php $_smarty_tpl->tpl_vars['field_name'] = new Smarty_variable("user_data[".((string)$_smarty_tpl->tpl_vars['field']->value['field_name'])."]", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['field_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_data']->value[$_smarty_tpl->tpl_vars['field']->value['field_name']], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['field_name_helper'] = new Smarty_variable("user_data.".((string)$_smarty_tpl->tpl_vars['field']->value['field_name']), null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['field_name'] = new Smarty_variable("user_data[fields][".((string)$_smarty_tpl->tpl_vars['field']->value['field_id'])."]", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['field_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_data']->value["fields"][$_smarty_tpl->tpl_vars['field']->value['field_id']], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['field_name_helper'] = new Smarty_variable("user_data.fields.".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']), null, 0);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']==((string)$_smarty_tpl->tpl_vars['prefix']->value)."fullname") {?>
            <?php $_smarty_tpl->tpl_vars['field_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['fullname_field_value']->value, null, 0);?>
        <?php }?>

        <?php $_smarty_tpl->tpl_vars['wrapper_class'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['wrapper_class'], null, 0);?>
        <?php if (!$_smarty_tpl->tpl_vars['wrapper_class']->value) {?>
            <?php $_smarty_tpl->tpl_vars['wrapper_class'] = new Smarty_variable("litecheckout__field--small", null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA")) {?>
                <?php $_smarty_tpl->tpl_vars['wrapper_class'] = new Smarty_variable("litecheckout__field--full", null, 0);?>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['field_name']->value=="user_data[s_fullname]"||$_smarty_tpl->tpl_vars['field_name']->value=="user_data[fields][54]"||$_smarty_tpl->tpl_vars['field_name']->value=="user_data[fields][56]") {?>
                <?php $_smarty_tpl->tpl_vars['wrapper_class'] = new Smarty_variable("litecheckout__field--xsmall", null, 0);?>
            <?php }?>
            
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['is_disabled']||$_smarty_tpl->tpl_vars['disable_all_fields']->value) {?>
            <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['is_disabled'] = true;?>
            <?php $_smarty_tpl->tpl_vars['input_meta'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['input_meta']->value)." disabled", null, 0);?>
            <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['attributes']["disabled"] = "disabled";?>
        <?php }?>

        <?php $_smarty_tpl->tpl_vars['field_id'] = new Smarty_variable("litecheckout_".((string)$_smarty_tpl->tpl_vars['field']->value['field_name']), null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['template']) {?>
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['field']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/profile_fields/field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>
    <?php } ?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/profile_fields.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/profile_fields.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<?php if ($_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value]) {?>
    <?php $_smarty_tpl->tpl_vars['disable_all_fields'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['disable_all_fields']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['fields'] = new Smarty_variable(array(), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['name_fields'] = new Smarty_variable(array(), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['name_field_names'] = new Smarty_variable(array("firstname","lastname","s_firstname","s_lastname","b_firstname","b_lastname"), null, 0);?>

    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['field_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['field_id']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['exclude']->value&&in_array($_smarty_tpl->tpl_vars['field']->value['field_name'],$_smarty_tpl->tpl_vars['exclude']->value)||$_smarty_tpl->tpl_vars['include']->value&&!in_array($_smarty_tpl->tpl_vars['field']->value['field_name'],$_smarty_tpl->tpl_vars['include']->value)) {?>
            <?php continue 1;?>
        <?php }?>

        <?php if (in_array($_smarty_tpl->tpl_vars['field']->value['field_name'],$_smarty_tpl->tpl_vars['name_field_names']->value)) {?>
            <?php $_smarty_tpl->createLocalArrayVariable('name_fields', null, 0);
$_smarty_tpl->tpl_vars['name_fields']->value[$_smarty_tpl->tpl_vars['field_id']->value] = $_smarty_tpl->tpl_vars['field']->value;?>
        <?php } else { ?>
            <?php $_smarty_tpl->createLocalArrayVariable('fields', null, 0);
$_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['field_id']->value] = $_smarty_tpl->tpl_vars['field']->value;?>
        <?php }?>
    <?php } ?>

    <?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable('', null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['section']->value==smarty_modifier_enum("ProfileFieldSections::SHIPPING_ADDRESS")) {?>
        <?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable("s_", null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['section']->value==smarty_modifier_enum("ProfileFieldSections::BILLING_ADDRESS")) {?>
        <?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable("b_", null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['fullname_exists'] = new Smarty_variable(smarty_modifier_count($_smarty_tpl->tpl_vars['name_fields']->value)==2, null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['fullname_exists']->value) {?>
        <?php $_smarty_tpl->tpl_vars['fullname_field'] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['name_fields']->value), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['name_field_id'] = new Smarty_variable(key($_smarty_tpl->tpl_vars['name_fields']->value), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['fullname_field_lastname_first'] = new Smarty_variable(in_array($_smarty_tpl->tpl_vars['fullname_field']->value['field_name'],array("lastname","s_lastname","b_lastname")), null, 0);?>
        <?php $_smarty_tpl->createLocalArrayVariable('fullname_field', null, 0);
$_smarty_tpl->tpl_vars['fullname_field']->value["field_name"] = ((string)$_smarty_tpl->tpl_vars['prefix']->value)."fullname";?>
        <?php if ($_smarty_tpl->tpl_vars['fullname_field_lastname_first']->value) {?>
            <?php $_smarty_tpl->tpl_vars['fullname_field_value'] = new Smarty_variable(trim(((string)$_smarty_tpl->tpl_vars['user_data']->value[((string)$_smarty_tpl->tpl_vars['prefix']->value)."lastname"])." ".((string)$_smarty_tpl->tpl_vars['user_data']->value[((string)$_smarty_tpl->tpl_vars['prefix']->value)."firstname"])), null, 0);?>
            <?php $_smarty_tpl->createLocalArrayVariable('fullname_field', null, 0);
$_smarty_tpl->tpl_vars['fullname_field']->value['description'] = $_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['prefix']->value)."last_name_and_first_name");?>
            <?php $_smarty_tpl->createLocalArrayVariable('fullname_field', null, 0);
$_smarty_tpl->tpl_vars['fullname_field']->value['attributes'] = array("data-ca-fullname-format"=>"lastname_first");?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['fullname_field_value'] = new Smarty_variable(trim(((string)$_smarty_tpl->tpl_vars['user_data']->value[((string)$_smarty_tpl->tpl_vars['prefix']->value)."firstname"])." ".((string)$_smarty_tpl->tpl_vars['user_data']->value[((string)$_smarty_tpl->tpl_vars['prefix']->value)."lastname"])), null, 0);?>
            <?php $_smarty_tpl->createLocalArrayVariable('fullname_field', null, 0);
$_smarty_tpl->tpl_vars['fullname_field']->value['description'] = $_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['prefix']->value)."first_name_and_last_name");?>
            <?php $_smarty_tpl->createLocalArrayVariable('fullname_field', null, 0);
$_smarty_tpl->tpl_vars['fullname_field']->value['attributes'] = array("data-ca-fullname-format"=>"firstname_first");?>
        <?php }?>
        <?php $_smarty_tpl->createLocalArrayVariable('fields', null, 0);
$_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['name_field_id']->value] = $_smarty_tpl->tpl_vars['fullname_field']->value;?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['fields'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields']->value+$_smarty_tpl->tpl_vars['name_fields']->value, null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['fields'] = new Smarty_variable(smarty_modifier_sort_by($_smarty_tpl->tpl_vars['fields']->value,"#position"), null, 0);?>

    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['field_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['field_id']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
        <?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable("text", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['input_meta'] = new Smarty_variable('', null, 0);?>
        <?php $_smarty_tpl->tpl_vars['label_meta'] = new Smarty_variable('', null, 0);?>

        <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable("litecheckout__field--", null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::PHONE")) {?>
            <?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable("tel", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['label_meta'] = new Smarty_variable(" cm-mask-phone-label", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['input_meta'] = new Smarty_variable(" cm-mask-phone", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."input", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::EMAIL")) {?>
            <?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable("text", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['label_meta'] = new Smarty_variable(" cm-email", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."input", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::STATE")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."state", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::COUNTRY")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."country", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::CHECKBOX")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."checkbox", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::DATE")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."date", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::INPUT")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."input", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::PASSWORD")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."password", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::RADIO")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."radio", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."selectbox", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."textarea", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::POSTAL_CODE")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."input", null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::ADDRESS_TYPE")) {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."radio", null, 0);?>
        <?php }?>

        
        <?php if ($_smarty_tpl->tpl_vars['field_type_class_postfix']->value==="litecheckout__field--") {?>
            <?php $_smarty_tpl->tpl_vars['field_type_class_postfix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field_type_class_postfix']->value)."custom", null, 0);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['checkout_required']=="Y"||$_smarty_tpl->tpl_vars['field']->value['checkout_required']=="1") {?>
            <?php $_smarty_tpl->tpl_vars['label_meta'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['label_meta']->value)." cm-required", null, 0);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['is_default']==smarty_modifier_enum("YesNo::YES")) {?>
            <?php $_smarty_tpl->tpl_vars['field_name'] = new Smarty_variable("user_data[".((string)$_smarty_tpl->tpl_vars['field']->value['field_name'])."]", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['field_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_data']->value[$_smarty_tpl->tpl_vars['field']->value['field_name']], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['field_name_helper'] = new Smarty_variable("user_data.".((string)$_smarty_tpl->tpl_vars['field']->value['field_name']), null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['field_name'] = new Smarty_variable("user_data[fields][".((string)$_smarty_tpl->tpl_vars['field']->value['field_id'])."]", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['field_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_data']->value["fields"][$_smarty_tpl->tpl_vars['field']->value['field_id']], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['field_name_helper'] = new Smarty_variable("user_data.fields.".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']), null, 0);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']==((string)$_smarty_tpl->tpl_vars['prefix']->value)."fullname") {?>
            <?php $_smarty_tpl->tpl_vars['field_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['fullname_field_value']->value, null, 0);?>
        <?php }?>

        <?php $_smarty_tpl->tpl_vars['wrapper_class'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['wrapper_class'], null, 0);?>
        <?php if (!$_smarty_tpl->tpl_vars['wrapper_class']->value) {?>
            <?php $_smarty_tpl->tpl_vars['wrapper_class'] = new Smarty_variable("litecheckout__field--small", null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA")) {?>
                <?php $_smarty_tpl->tpl_vars['wrapper_class'] = new Smarty_variable("litecheckout__field--full", null, 0);?>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['field_name']->value=="user_data[s_fullname]"||$_smarty_tpl->tpl_vars['field_name']->value=="user_data[fields][54]"||$_smarty_tpl->tpl_vars['field_name']->value=="user_data[fields][56]") {?>
                <?php $_smarty_tpl->tpl_vars['wrapper_class'] = new Smarty_variable("litecheckout__field--xsmall", null, 0);?>
            <?php }?>
            
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['is_disabled']||$_smarty_tpl->tpl_vars['disable_all_fields']->value) {?>
            <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['is_disabled'] = true;?>
            <?php $_smarty_tpl->tpl_vars['input_meta'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['input_meta']->value)." disabled", null, 0);?>
            <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['attributes']["disabled"] = "disabled";?>
        <?php }?>

        <?php $_smarty_tpl->tpl_vars['field_id'] = new Smarty_variable("litecheckout_".((string)$_smarty_tpl->tpl_vars['field']->value['field_name']), null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['template']) {?>
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['field']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/profile_fields/field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>
    <?php } ?>
<?php }?>
<?php }?><?php }} ?>
