<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:28
  from 'C:\Users\nihmo\prestashop\themes\theme_optima\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df1cba9b35_79295141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76782d6d38a16d0648b9ad51047dea157368e600' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\themes\\theme_optima\\templates\\_partials\\footer.tpl',
      1 => 1727966040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6704df1cba9b35_79295141 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['postheme']->value['footer_template'] == 0) {?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFooterBuilder"),$_smarty_tpl ) );?>

<?php } else { ?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"CETemplate",'id'=>((string)$_smarty_tpl->tpl_vars['postheme']->value['footer_template'])),$_smarty_tpl ) );?>

<?php }?> 

<?php }
}
