<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:40
  from 'module:poswishlistviewstemplateshookposwishlistextra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df281518e0_69766691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7cf62e4b368f99111ffa16b21f9266d90018687' => 
    array (
      0 => 'module:poswishlistviewstemplateshookposwishlistextra.tpl',
      1 => 1727966039,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6704df281518e0_69766691 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a id="wishlist_button" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_product']->value )), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
', document.getElementById('quantity_wanted').value, '', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
'); return false;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to my wishlist','mod'=>'poswishlist'),$_smarty_tpl ) );?>
">
	<i class="icon-rt-heart2"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to wishlist','mod'=>'poswishlist'),$_smarty_tpl ) );?>

</a><?php }
}
