<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 22:29:56
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\addons\seo\hooks\products\update_seo.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34338545260bf70d478cbc2-06552204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6a6be58df17c658c693e157e5a815d823ca586d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\addons\\seo\\hooks\\products\\update_seo.post.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '34338545260bf70d478cbc2-06552204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view_uri' => 0,
    'runtime' => 0,
    'settings' => 0,
    'product_data' => 0,
    'protocol' => 0,
    'description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf70d47997b0_65978643',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf70d47997b0_65978643')) {function content_60bf70d47997b0_65978643($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\modifier.truncate.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('seo.rich_snippets','in_stock'));
?>
<?php if ($_smarty_tpl->tpl_vars['view_uri']->value&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<?php $_smarty_tpl->tpl_vars['protocol'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Security']['secure_storefront']=="full" ? "https" : "http", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("seo.rich_snippets"),'target'=>"#acc_addon_seo_richsnippets",'meta'=>"mobile-hidden"), 0);?>

<div id="acc_addon_seo_richsnippets" class="collapsed in mobile-hidden">

<div class="seo-rich-snippet">

    <h3>
        <a class="srs-title cm-seo-srs-title" href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id']),"C",$_smarty_tpl->tpl_vars['protocol']->value), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo htmlspecialchars(smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product_data']->value['product']),60,"..."), ENT_QUOTES, 'UTF-8');?>
</a>
    </h3>
    <div>
        <div>
            <cite class="srs-url"><?php echo htmlspecialchars(fn_url('',"C",$_smarty_tpl->tpl_vars['protocol']->value), ENT_QUOTES, 'UTF-8');?>
</cite>
        </div>

        <div class="srs-price"><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:seo_snippet_attributes")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:seo_snippet_attributes"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product_data']->value['price'],'span_id'=>"elm_seo_srs_price"), 0);?>
 - <?php echo $_smarty_tpl->__("in_stock");
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:seo_snippet_attributes"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>

        <?php $_smarty_tpl->tpl_vars['description'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['full_description'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product_data']->value['short_description'] : $tmp), null, 0);?>
        <span class="srs-description cm-seo-srs-description"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['description']->value),145,"...");?>
</span>
    </div>
</div>

</div>
<?php }?>
<?php }} ?>
