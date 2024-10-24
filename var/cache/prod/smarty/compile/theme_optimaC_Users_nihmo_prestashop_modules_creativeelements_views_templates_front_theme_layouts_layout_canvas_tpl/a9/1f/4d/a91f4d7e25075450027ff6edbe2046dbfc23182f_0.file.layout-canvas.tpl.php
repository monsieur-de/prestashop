<?php
/* Smarty version 4.3.4, created on 2024-10-08 18:32:06
  from 'C:\Users\nihmo\prestashop\modules\creativeelements\views\templates\front\theme\layouts\layout-canvas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67055e8624f494_76997475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a91f4d7e25075450027ff6edbe2046dbfc23182f' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\modules\\creativeelements\\views\\templates\\front\\theme\\layouts\\layout-canvas.tpl',
      1 => 1727966038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_67055e8624f494_76997475 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!doctype html>
<html lang="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['iso_code'],'html','UTF-8' ));?>
">
	<head>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178236326267055e8622aeb0_89857390', 'head');
?>

	</head>
	<body id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['page_name'],'html','UTF-8' ));?>
" class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] ));?>
">
		<main>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98780331567055e86245c04_52283221', 'notifications');
?>

			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'cleanHtml' ][ 0 ], array( $_smarty_tpl->tpl_vars['ce_desc']->value['description'] ));?>

		</main>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3091032867055e86248422_76037624', 'javascript_bottom');
?>

	</body>
</html>
<?php }
/* {block 'head'} */
class Block_178236326267055e8622aeb0_89857390 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_178236326267055e8622aeb0_89857390',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php
}
}
/* {/block 'head'} */
/* {block 'notifications'} */
class Block_98780331567055e86245c04_52283221 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_98780331567055e86245c04_52283221',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<?php
}
}
/* {/block 'notifications'} */
/* {block 'javascript_bottom'} */
class Block_3091032867055e86248422_76037624 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_3091032867055e86248422_76037624',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
		<?php
}
}
/* {/block 'javascript_bottom'} */
}
