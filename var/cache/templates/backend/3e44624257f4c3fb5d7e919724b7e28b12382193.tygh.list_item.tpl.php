<?php /* Smarty version Smarty-3.1.21, created on 2021-06-04 11:09:20
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\views\storefronts\components\list_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100548271060b98b5006a261-42572544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e44624257f4c3fb5d7e919724b7e28b12382193' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\views\\storefronts\\components\\list_item.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '100548271060b98b5006a261-42572544',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'storefront' => 0,
    'get_company_ids' => 0,
    'get_language_ids' => 0,
    'get_currency_ids' => 0,
    'get_country_codes' => 0,
    'force_selector_display' => 0,
    'select_mode' => 0,
    'return_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b98b5009ca83_48873672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b98b5009ca83_48873672')) {function content_60b98b5009ca83_48873672($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('url','default_storefront','tools','edit','delete','storefront_status'));
?>

<tr class="storefront"
    data-ca-storefront-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value->storefront_id, ENT_QUOTES, 'UTF-8');?>
"
    <?php if ($_smarty_tpl->tpl_vars['get_company_ids']->value) {?>
        data-ca-storefront-company-ids="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['storefront']->value->getCompanyIds()), ENT_QUOTES, 'UTF-8');?>
"
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['get_language_ids']->value) {?>
        data-ca-storefront-language-ids="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['storefront']->value->getLanguageIds()), ENT_QUOTES, 'UTF-8');?>
"
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['get_currency_ids']->value) {?>
        data-ca-storefront-currency-ids="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['storefront']->value->getCurrencyIds()), ENT_QUOTES, 'UTF-8');?>
"
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['get_country_codes']->value) {?>
        data-ca-storefront-country-codes="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['storefront']->value->getCountryCodes()), ENT_QUOTES, 'UTF-8');?>
"
    <?php }?>
>
    <td data-th=""
        class="center <?php if (!$_smarty_tpl->tpl_vars['force_selector_display']->value) {?>mobile-hide<?php }?>"
    >
        <?php if ($_smarty_tpl->tpl_vars['select_mode']->value=="multiple") {?>
            <input type="checkbox"
                   name="storefront_ids[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value->storefront_id, ENT_QUOTES, 'UTF-8');?>
]"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value->storefront_id, ENT_QUOTES, 'UTF-8');?>
"
                   class="cm-item storefront__selector storefront__selector--multiple"
            />
        <?php } elseif ($_smarty_tpl->tpl_vars['select_mode']->value=="single") {?>
            <input type="radio"
                   name="storefront_id"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value->storefront_id, ENT_QUOTES, 'UTF-8');?>
"
                   class="cm-item storefront__selector storefront__selector--single"
            />
        <?php } else { ?>
            &nbsp;
        <?php }?>
    </td>

    <td data-th="<?php echo $_smarty_tpl->__("url");?>
">
        <a class="storefront__name"
           href="<?php echo htmlspecialchars(fn_url("storefronts.update?storefront_id=".((string)$_smarty_tpl->tpl_vars['storefront']->value->storefront_id)), ENT_QUOTES, 'UTF-8');?>
"
        ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value->url, ENT_QUOTES, 'UTF-8');?>
</a>
        <?php if ($_smarty_tpl->tpl_vars['storefront']->value->is_default) {?>
            <span class="muted">(<?php echo $_smarty_tpl->__("default_storefront");?>
)</span>
        <?php }?>
    </td>

    <td width="5%" class="nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_items", null, null); ob_start(); ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:list_extra_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:list_extra_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'href'=>"storefronts.update?storefront_id=".((string)$_smarty_tpl->tpl_vars['storefront']->value->storefront_id),'text'=>$_smarty_tpl->__("edit")));?>

                </li>
            <?php if (!$_smarty_tpl->tpl_vars['storefront']->value->is_default) {?>
                <li>
                    <?php ob_start();?><?php echo $_smarty_tpl->__("delete");?>
<?php $_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'href'=>"storefronts.delete?storefront_id=".((string)$_smarty_tpl->tpl_vars['storefront']->value->storefront_id)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_url']->value),'class'=>"cm-confirm",'text'=>$_tmp1,'method'=>"POST"));?>

                </li>
            <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:list_extra_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <div class="hidden-tools">
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_items']));?>

        </div>
    </td>

    <td width="10%" class="right" data-th="<?php echo $_smarty_tpl->__("storefront_status");?>
">
        <?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("StorefrontStatuses::OPEN"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("StorefrontStatuses::CLOSED"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('meta'=>"company-switch-storefront-status-button storefront__status",'checked'=>$_smarty_tpl->tpl_vars['storefront']->value->status==smarty_modifier_enum("StorefrontStatuses::OPEN"),'extra_attrs'=>array("data-ca-submit-url"=>'storefronts.update_status',"data-ca-storefront-id"=>$_smarty_tpl->tpl_vars['storefront']->value->storefront_id,"data-ca-opened-status"=>$_tmp2,"data-ca-closed-status"=>$_tmp3,"data-ca-return-url"=>$_smarty_tpl->tpl_vars['return_url']->value)), 0);?>

    </td>
</tr>
<?php }} ?>
