<?php
/* Smarty version 4.3.4, created on 2024-10-09 22:07:55
  from 'C:\Users\nihmo\prestashop\admin208qfgoushbdtcmpmx5\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6706e29b9580b5_20079648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc4503430d8cd2c45f460020e73725ee0926cc36' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\admin208qfgoushbdtcmpmx5\\themes\\default\\template\\content.tpl',
      1 => 1727366562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6706e29b9580b5_20079648 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
