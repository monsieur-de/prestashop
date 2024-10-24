<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:28
  from 'module:posshoppingcartposshoppingcart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df1c25f229_50243918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdb3135c9a469525a27945e4bc035c97ba314a70' => 
    array (
      0 => 'module:posshoppingcartposshoppingcart.tpl',
      1 => 1727966039,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:posshoppingcart/posshoppingcart-product-line.tpl' => 2,
    'file:checkout/_partials/cart-detailed-totals.tpl' => 2,
  ),
),false)) {
function content_6704df1c25f229_50243918 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="_desktop_cart_block">
  <div class="blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['cart_layout']->value == '1') {?>cart-default<?php } else { ?>cart-sidebar<?php }?>" data-refresh-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
" data-cartitems="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
">
     <a rel="nofollow" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ((isset($_smarty_tpl->tpl_vars['icon']->value))) {?>
        <i class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['icon']->value, ENT_QUOTES, 'UTF-8');?>
"></i>
        <?php } else { ?>
        <i class="icon-rt-FullShoppingCart"></i>
        <?php }?>
        <span class="cart-products-total"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="cart-products-count"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span>
    </a>
	 <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'cart') {?>
    <?php if ($_smarty_tpl->tpl_vars['cart_layout']->value == '1') {?>
      <div class="popup_cart popup-dropdown">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <li><?php $_smarty_tpl->_subTemplateRender('module:posshoppingcart/posshoppingcart-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?></li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
          <div class="price_content">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14818138466704df1c2597c8_90655931', 'cart_totals');
?>

          </div>
          <div class="checkout">
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a> 
          </div>
      </div>
    <?php } else { ?>
     <div class="popup_cart popup-sidebar">
		<div class="title-cart flex-layout space-between">
			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My cart','mod'=>'posshoppingcart'),$_smarty_tpl ) );?>
</span>
			<a href="javascript:void(0)" class="close-cart"><i class="icon-rt-close-outline"></i></a>
		</div>
		<div class="content-sidebar">
			<?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] != '0') {?>
			  <ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
				<li><?php $_smarty_tpl->_subTemplateRender('module:posshoppingcart/posshoppingcart-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?></li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			  </ul>
			  <div class="price_content">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17510846216704df1c25ce51_88068330', 'cart_totals');
?>

			  </div>
			  <div class="checkout">
				<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a> 
			  </div>
			<?php } else { ?>
				<div class="empty-cart">
					<i class="icon-rt-handbag"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your cart is empty.','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

				</div>
			<?php }?>
		</div>
      </div>
    <?php }?>
	<?php }?>
  </div>
</div>
<?php }
/* {block 'cart_totals'} */
class Block_14818138466704df1c2597c8_90655931 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_totals' => 
  array (
    0 => 'Block_14818138466704df1c2597c8_90655931',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
            <?php
}
}
/* {/block 'cart_totals'} */
/* {block 'cart_totals'} */
class Block_17510846216704df1c25ce51_88068330 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_totals' => 
  array (
    0 => 'Block_17510846216704df1c25ce51_88068330',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	              <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, true);
?>
	            <?php
}
}
/* {/block 'cart_totals'} */
}
