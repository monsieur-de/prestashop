<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:27
  from 'C:\Users\nihmo\prestashop\themes\theme_optima\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df1b2a81f8_89659478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe7a5d51416c573d33a1eb8f32583649c3066ccc' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\themes\\theme_optima\\templates\\_partials\\header.tpl',
      1 => 1727966040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6704df1b2a81f8_89659478 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['postheme']->value['header_template'] == 0) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayHeaderBuilder"),$_smarty_tpl ) );?>

<?php } else { ?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"CETemplate",'id'=>((string)$_smarty_tpl->tpl_vars['postheme']->value['header_template'])),$_smarty_tpl ) );?>

<?php }
}
}
