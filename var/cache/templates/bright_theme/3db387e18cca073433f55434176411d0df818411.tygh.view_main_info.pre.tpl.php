<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 11:35:37
         compiled from "C:\xampp\htdocs\cs-jp\design\themes\responsive\templates\addons\seo\hooks\products\view_main_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3502443760bed7795b0881-67609083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3db387e18cca073433f55434176411d0df818411' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\themes\\responsive\\templates\\addons\\seo\\hooks\\products\\view_main_info.pre.tpl',
      1 => 1622772506,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3502443760bed7795b0881-67609083',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'image' => 0,
    'config' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bed7795d6d94_56627509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bed7795d6d94_56627509')) {function content_60bed7795d6d94_56627509($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div itemscope itemtype="http://schema.org/Product">
    <meta itemprop="sku" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['seo_snippet']['sku'], ENT_QUOTES, 'UTF-8');?>
" />
    <meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['seo_snippet']['name'], ENT_QUOTES, 'UTF-8');?>
" />
    <meta itemprop="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['seo_snippet']['description'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['seo_snippet']['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
        <meta itemprop="image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <?php } ?>

    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
        <link itemprop="url" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');?>
" />
        <link itemprop="availability" href="http://schema.org/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['seo_snippet']['availability'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php if ($_smarty_tpl->tpl_vars['product']->value['seo_snippet']['show_price']) {?>
            <meta itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['seo_snippet']['price_currency'], ENT_QUOTES, 'UTF-8');?>
"/>
            <meta itemprop="price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['seo_snippet']['price'], ENT_QUOTES, 'UTF-8');?>
"/>
        <?php }?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['seo_snippet']['brand']) {?>
        <div itemprop="brand" itemscope itemtype="http://schema.org/Thing">
            <meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['seo_snippet']['brand'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>
    <?php }?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:seo_snippet_attributes")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:seo_snippet_attributes"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:seo_snippet_attributes"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/seo/hooks/products/view_main_info.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/seo/hooks/products/view_main_info.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div itemscope itemtype="http://schema.org/Product">
    <meta itemprop="sku" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['seo_snippet']['sku'], ENT_QUOTES, 'UTF-8');?>
" />
    <meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['seo_snippet']['name'], ENT_QUOTES, 'UTF-8');?>
" />
    <meta itemprop="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['seo_snippet']['description'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['seo_snippet']['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
        <meta itemprop="image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <?php } ?>

    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
        <link itemprop="url" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');?>
" />
        <link itemprop="availability" href="http://schema.org/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['seo_snippet']['availability'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php if ($_smarty_tpl->tpl_vars['product']->value['seo_snippet']['show_price']) {?>
            <meta itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['seo_snippet']['price_currency'], ENT_QUOTES, 'UTF-8');?>
"/>
            <meta itemprop="price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['seo_snippet']['price'], ENT_QUOTES, 'UTF-8');?>
"/>
        <?php }?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['seo_snippet']['brand']) {?>
        <div itemprop="brand" itemscope itemtype="http://schema.org/Thing">
            <meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['seo_snippet']['brand'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>
    <?php }?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:seo_snippet_attributes")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:seo_snippet_attributes"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:seo_snippet_attributes"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


</div>
<?php }?><?php }} ?>
