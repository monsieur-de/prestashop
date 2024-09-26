<?php
/* Smarty version 4.3.4, created on 2024-09-26 15:30:53
  from '/home/justine/Documents/md/prestashop/modules/psxdesign/views/templates/hook/displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f5620de95af1_76876831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '983aba4a15b64bf4c5c72dfc1375c9127e4b61fb' => 
    array (
      0 => '/home/justine/Documents/md/prestashop/modules/psxdesign/views/templates/hook/displayModuleTag.tpl',
      1 => 1725437221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f5620de95af1_76876831 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
