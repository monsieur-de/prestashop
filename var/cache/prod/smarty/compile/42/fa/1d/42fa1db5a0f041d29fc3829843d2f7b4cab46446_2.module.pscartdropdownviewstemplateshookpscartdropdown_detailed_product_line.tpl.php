<?php
/* Smarty version 4.3.4, created on 2024-09-27 09:50:03
  from 'module:pscartdropdownviewstemplateshookpscartdropdown_detailed_product_line.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f663ab0b5975_37862497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42fa1db5a0f041d29fc3829843d2f7b4cab46446' => 
    array (
      0 => 'module:pscartdropdownviewstemplateshookpscartdropdown_detailed_product_line.tpl',
      1 => 1704791610,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f663ab0b5975_37862497 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-line-grid">
    <!--  product left content: image-->
    <div class="col-md-3 col-xs-4">
        <img class="productimage" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'quotes' )), ENT_QUOTES, 'UTF-8');?>
">
    </div>
    <!--  product left body: description -->
    <div class="col-md-5 col-xs-6">
        <div>
            <a class="label" style="color: #363a41 !important;font-weight: bold;" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
        </div>
        <div class="product-price h5 <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>has-discount<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
            <div class="product-discount">
                <span class="regular-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
                <span class="discount discount-percentage">
                -<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_percentage_absolute'], ENT_QUOTES, 'UTF-8');?>

                </span>
                <?php } else { ?>
                <span class="discount discount-amount">
                -<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_to_display'], ENT_QUOTES, 'UTF-8');?>

                </span>
                <?php }?>
            </div>
            <?php }?>
            <div>
                <span style="<?php if ($_smarty_tpl->tpl_vars['cartdropdown_params']->value['CHECKBOX_BLACKPRICE'] == 0) {?>color:<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cartdropdown_params']->value['PRIMARY_COLOR_CARTDROPDOWN'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['unit_price_full']) {?>
                <div><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['unit_price_full'], ENT_QUOTES, 'UTF-8');?>
</div>
                <?php }?>
            </div>
        </div>
        <br/>
        <div class="attributes">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attributes'], 'value', false, NULL, 'attributes', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_attributes']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_attributes']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_attributes']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_attributes']->value['total'];
?>
            <span style="color: #414141 !important"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_attributes']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_attributes']->value['last'] : null)) {?> - <?php }?>
            </span>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <!--  product left body: description -->
    <div class="pscartdropdown-product-line-grid-right col-lg-3 col-md-4 col-xs-4">
	<?php if ($_smarty_tpl->tpl_vars['isMobile']->value == 0) {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['is_gift'])) && $_smarty_tpl->tpl_vars['product']->value['is_gift']) {?>
        <span class="gift-quantity"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php } else { ?>
        <input
            class="js-cart-line-product-quantity"
            data-down-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['down_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
            data-up-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['up_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
            data-update-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['update_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
            data-product-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"
            type="text"
            value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
"
            name="product-quantity-spin"
            min="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
            />
        <?php }?>
	<?php }?>
        <div class="divclosecross col-md-2 col-xs-2">
            <div class="cartdrop-line-product-actions">
                <a
                    class                       = "pscartdropdowncross remove-from-cart"
                    rel                         = "nofollow"
                    href                        = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
"
                    data-link-action            = "delete-from-cart"
                    data-id-product             = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
"
                    data-id-product-attribute   = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
"
                    data-id-customization   	  = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_customization'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
"
                    >
                <?php if (!(isset($_smarty_tpl->tpl_vars['product']->value['is_gift'])) || !$_smarty_tpl->tpl_vars['product']->value['is_gift']) {?>
                <i class="material-icons float-xs-left">close</i>
                <?php }?>
                </a>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<?php }
}
