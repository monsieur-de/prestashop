<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:27
  from 'C:\Users\nihmo\prestashop\themes\theme_optima\templates\layouts\layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df1b02a842_24271390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b473b0df13ef9a6b75bf207e9f890bd6b3052076' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\themes\\theme_optima\\templates\\layouts\\layout-full-width.tpl',
      1 => 1727966040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6704df1b02a842_24271390 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3110791906704df1b01a411_06011400', 'content_wrapper');
?>

<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product' && $_smarty_tpl->tpl_vars['postheme']->value['product_layout'] == 1) {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2846611226704df1b027130_76840443', "left_column");
?>

<?php } else { ?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_357594336704df1b028211_39228282', 'left_column');
?>

<?php }
if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product' && $_smarty_tpl->tpl_vars['postheme']->value['product_layout'] == 3) {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10209397116704df1b029247_90833952', "right_column");
?>

<?php } else { ?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7677798306704df1b02a285_67769219', 'right_column');
?>

<?php }
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'content'} */
class Block_11551029816704df1b0254a6_75330989 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<p>Hello world! This is HTML5 Boilerplate.</p>
			<?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_3110791906704df1b01a411_06011400 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_3110791906704df1b01a411_06011400',
  ),
  'content' => 
  array (
    0 => 'Block_11551029816704df1b0254a6_75330989',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {?>
		<div id="content-wrapper" class="js-content-wrapper 
  <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product' && $_smarty_tpl->tpl_vars['postheme']->value['product_layout'] == 1) {?>left-column col-xs-12 col-lg-9
  <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product' && $_smarty_tpl->tpl_vars['postheme']->value['product_layout'] == 3) {?>right-column col-xs-12 col-lg-9
  <?php } else { ?>col-xs-12<?php }?>">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11551029816704df1b0254a6_75330989', 'content', $this->tplIndex);
?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

		</div>
	<?php }
}
}
/* {/block 'content_wrapper'} */
/* {block "left_content"} */
class Block_3501219866704df1b027538_89826194 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumnProduct"),$_smarty_tpl ) );?>

				<?php
}
}
/* {/block "left_content"} */
/* {block "left_column"} */
class Block_2846611226704df1b027130_76840443 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_2846611226704df1b027130_76840443',
  ),
  'left_content' => 
  array (
    0 => 'Block_3501219866704df1b027538_89826194',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div id="left-column" class="col-xs-12 col-lg-3">
			<div id="left-content">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3501219866704df1b027538_89826194', "left_content", $this->tplIndex);
?>

			</div>
		</div>
	<?php
}
}
/* {/block "left_column"} */
/* {block 'left_column'} */
class Block_357594336704df1b028211_39228282 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_357594336704df1b028211_39228282',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block "right_content"} */
class Block_12521028606704df1b029606_19844509 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumnProduct"),$_smarty_tpl ) );?>

				<?php
}
}
/* {/block "right_content"} */
/* {block "right_column"} */
class Block_10209397116704df1b029247_90833952 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_10209397116704df1b029247_90833952',
  ),
  'right_content' => 
  array (
    0 => 'Block_12521028606704df1b029606_19844509',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div id="right-column" class="col-xs-12 col-lg-3">
			<div id="right-content">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12521028606704df1b029606_19844509', "right_content", $this->tplIndex);
?>

			</div>
		</div>
	<?php
}
}
/* {/block "right_column"} */
/* {block 'right_column'} */
class Block_7677798306704df1b02a285_67769219 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_7677798306704df1b02a285_67769219',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
}
