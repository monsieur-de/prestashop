<?php
/* Smarty version 4.3.4, created on 2024-09-27 09:45:52
  from '/home/justine/Documents/md/prestashop/modules/psxdesign/views/templates/hook/displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f662b0cfc127_59595377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47c0f61ee12894e072ff92431e0749643797f036' => 
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
function content_66f662b0cfc127_59595377 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
