<?php
/* Smarty version 4.3.4, created on 2024-09-26 11:05:09
  from '/opt/lampp/htdocs/prestashop/modules/psxdesign/views/templates/hook/displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f523c5349918_75486610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a99a409937386edceaae09303df29ed0ea1dcce1' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/modules/psxdesign/views/templates/hook/displayModuleTag.tpl',
      1 => 1725437221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f523c5349918_75486610 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
