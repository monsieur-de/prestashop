<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:40
  from 'module:possizechartviewstemplateshookpossizechart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df281038e8_32976113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fddc9ebeedb4f7eeb82f5a57e4ba3258d0f25bdf' => 
    array (
      0 => 'module:possizechartviewstemplateshookpossizechart.tpl',
      1 => 1727966039,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6704df281038e8_32976113 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '18874877406704df28101ab2_94641773';
if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
<div class="pos-sizechart">
	<div class="pos-sizechart__title">
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Size Chart','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

	</div>
	<div class="pos-sizechart__content">
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	</div>
</div>
<?php }
}
}
