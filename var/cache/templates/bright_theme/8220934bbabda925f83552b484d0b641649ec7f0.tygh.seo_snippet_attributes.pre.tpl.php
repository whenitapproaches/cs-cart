<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 21:12:18
         compiled from "C:\xampp\htdocs\cs-jp\design\themes\responsive\templates\addons\seo\addons\discussion\hooks\products\seo_snippet_attributes.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118955396960bf5ea28c8292-40765483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8220934bbabda925f83552b484d0b641649ec7f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\themes\\responsive\\templates\\addons\\seo\\addons\\discussion\\hooks\\products\\seo_snippet_attributes.pre.tpl',
      1 => 1622772506,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '118955396960bf5ea28c8292-40765483',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'post' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf5ea28dc282_99357278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf5ea28dc282_99357278')) {function content_60bf5ea28dc282_99357278($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cs-jp/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items']&&floatval($_smarty_tpl->tpl_vars['product']->value['discussion']['average_rating'])) {?>
<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"> 
    <meta itemprop="reviewCount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items'], ENT_QUOTES, 'UTF-8');?>
">
    <meta itemprop="ratingValue" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discussion']['average_rating'], ENT_QUOTES, 'UTF-8');?>
">
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['product']->value['discussion']['posts']) {?>
    <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['discussion']['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['post']->value['name']&&$_smarty_tpl->tpl_vars['post']->value['rating_value']) {?>
        <div itemprop="review" itemscope itemtype="http://schema.org/Review">
            <div itemprop="author" itemscope itemtype="http://schema.org/Person">
                <meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
            <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                <meta itemprop="ratingValue" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['rating_value'], ENT_QUOTES, 'UTF-8');?>
" />
                <meta itemprop="bestRating" content="5" />
            </div>
        </div>
        <?php }?>
    <?php } ?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/seo/addons/discussion/hooks/products/seo_snippet_attributes.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/seo/addons/discussion/hooks/products/seo_snippet_attributes.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items']&&floatval($_smarty_tpl->tpl_vars['product']->value['discussion']['average_rating'])) {?>
<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"> 
    <meta itemprop="reviewCount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items'], ENT_QUOTES, 'UTF-8');?>
">
    <meta itemprop="ratingValue" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discussion']['average_rating'], ENT_QUOTES, 'UTF-8');?>
">
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['product']->value['discussion']['posts']) {?>
    <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['discussion']['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['post']->value['name']&&$_smarty_tpl->tpl_vars['post']->value['rating_value']) {?>
        <div itemprop="review" itemscope itemtype="http://schema.org/Review">
            <div itemprop="author" itemscope itemtype="http://schema.org/Person">
                <meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
            <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                <meta itemprop="ratingValue" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['rating_value'], ENT_QUOTES, 'UTF-8');?>
" />
                <meta itemprop="bestRating" content="5" />
            </div>
        </div>
        <?php }?>
    <?php } ?>
<?php }
}?><?php }} ?>
