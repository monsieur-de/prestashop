<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:26
  from 'C:\Users\nihmo\prestashop\modules\posquickmenu\views\templates\hook\posquickmenu-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df1ade1456_68419200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da07b6d0547f1aa8d193566f0e4194716bd2a178' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\modules\\posquickmenu\\views\\templates\\hook\\posquickmenu-header.tpl',
      1 => 1727966039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6704df1ade1456_68419200 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    <?php if ($_smarty_tpl->tpl_vars['text_color']->value) {?>
        .quickmenu-mobile-wrapper .quickmenu-item .block-title{
            color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['text_color']->value, ENT_QUOTES, 'UTF-8');?>
;
        }
    <?php }?>
</style><?php }
}
