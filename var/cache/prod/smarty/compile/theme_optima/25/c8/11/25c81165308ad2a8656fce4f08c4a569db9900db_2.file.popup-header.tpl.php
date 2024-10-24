<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:26
  from 'C:\Users\nihmo\prestashop\modules\pospopup\popup-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df1ad3c807_01022302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25c81165308ad2a8656fce4f08c4a569db9900db' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\modules\\pospopup\\popup-header.tpl',
      1 => 1727966038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6704df1ad3c807_01022302 (Smarty_Internal_Template $_smarty_tpl) {
?><style type="text/css">
#posnewsletterpopup {
	width: 100%;
	background-repeat: no-repeat;
	<?php if ($_smarty_tpl->tpl_vars['pnp_width']->value) {?>max-width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pnp_width']->value, ENT_QUOTES, 'UTF-8');?>
px; <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['pnp_width']->value) {?>max-height: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pnp_height']->value, ENT_QUOTES, 'UTF-8');?>
px; <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['bg_color']->value) {?>background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bg_color']->value, ENT_QUOTES, 'UTF-8');?>
; <?php }?>
}
</style><?php }
}
