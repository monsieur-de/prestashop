<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:26
  from 'C:\Users\nihmo\prestashop\modules\poscookielaw\views\templates\hook\cookielaw-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df1aca6d91_71556395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f15cb3697f6e7e644c5ae8d83a7e5d7843c15a8' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\modules\\poscookielaw\\views\\templates\\hook\\cookielaw-header.tpl',
      1 => 1727966038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6704df1aca6d91_71556395 (Smarty_Internal_Template $_smarty_tpl) {
?><style type="text/css">
#poscookielaw {
	<?php if ((isset($_smarty_tpl->tpl_vars['bg_color']->value)) && $_smarty_tpl->tpl_vars['bg_color']->value) {?>background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bg_color']->value, ENT_QUOTES, 'UTF-8');?>
; <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['color']->value)) && $_smarty_tpl->tpl_vars['color']->value) {?>color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
; <?php }?>
}
#poscookielaw p {
    <?php if ((isset($_smarty_tpl->tpl_vars['color']->value)) && $_smarty_tpl->tpl_vars['color']->value) {?>color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
; <?php }?>
}
</style><?php }
}
