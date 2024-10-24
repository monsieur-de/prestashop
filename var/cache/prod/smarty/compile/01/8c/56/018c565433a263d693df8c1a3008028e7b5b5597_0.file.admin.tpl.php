<?php
/* Smarty version 4.3.4, created on 2024-10-09 22:07:55
  from 'C:\Users\nihmo\prestashop\modules\creativeelements\views\templates\admin\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6706e29b373378_13668154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '018c565433a263d693df8c1a3008028e7b5b5597' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\modules\\creativeelements\\views\\templates\\admin\\admin.tpl',
      1 => 1727966038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6706e29b373378_13668154 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'ce_preview_breadcrumb' => 
  array (
    'compiled_filepath' => 'C:\\Users\\nihmo\\prestashop\\var\\cache\\prod\\smarty\\compile\\01\\8c\\56\\018c565433a263d693df8c1a3008028e7b5b5597_0.file.admin.tpl.php',
    'uid' => '018c565433a263d693df8c1a3008028e7b5b5597',
    'call_name' => 'smarty_template_function_ce_preview_breadcrumb_8375879536706e29b2a0368_08606048',
  ),
));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'ce_warning_multistore', null, null);?><span id="ce-warning-multistore"></span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'ce_alert', null, null);?><div class="alert alert-%s">%s</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'ce_undefined_position', null, null);?>
	<?php echo ce__('Undefined Position!');?>

	<a href="http://docs.webshopworks.com/creative-elements/79-troubleshooting/337-undefined-position" class="ce-read-more"><?php echo ce__('Learn More');?>
</a>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'ce_action_link', null, null);?><a href="%s" target="%s"><i class="icon-%s"></i> %s</a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>



<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'ce_inline_script', null, null);?>
	<?php echo '<script'; ?>
 data-cfasync="false">
	%s
	<?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
/* smarty_template_function_ce_preview_breadcrumb_8375879536706e29b2a0368_08606048 */
if (!function_exists('smarty_template_function_ce_preview_breadcrumb_8375879536706e29b2a0368_08606048')) {
function smarty_template_function_ce_preview_breadcrumb_8375879536706e29b2a0368_08606048(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('links'=>array()), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

	<?php $_smarty_tpl->_assignInScope('last', array_pop($_smarty_tpl->tpl_vars['links']->value));?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['links']->value, 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
		<a><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'cleanHtml' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value['title'] ));?>
</a><span class="navigation-pipe">&gt;</span>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'cleanHtml' ][ 0 ], array( $_smarty_tpl->tpl_vars['last']->value['title'] ));?>

<?php
}}
/*/ smarty_template_function_ce_preview_breadcrumb_8375879536706e29b2a0368_08606048 */
}
