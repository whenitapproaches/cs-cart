<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 18:01:21
         compiled from "C:\xampp\htdocs\cs-jp\design\backend\templates\common\comet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190226827960bf31e1db9759-78330301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61b58d7c6b2a513a16cdb874022c27a804e335b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cs-jp\\design\\backend\\templates\\common\\comet.tpl',
      1 => 1560233860,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '190226827960bf31e1db9759-78330301',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf31e1dbad68_82261789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf31e1dbad68_82261789')) {function content_60bf31e1dbad68_82261789($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('processing'));
?>
<a id="comet_container_controller" data-backdrop="static" data-keyboard="false" href="#comet_control" data-toggle="modal" class="hide"></a>

<div class="modal hide fade" id="comet_control" tabindex="-1" role="dialog" aria-labelledby="comet_title" aria-hidden="true">
    <div class="modal-header">
        <h3 id="comet_title"><?php echo $_smarty_tpl->__("processing");?>
</h3>
    </div>
    <div class="modal-body">
        <p></p>
        <div class="progress progress-striped active">
            
            <div class="bar" style="width: 0%;"></div>
        </div>
    </div>
</div><?php }} ?>
