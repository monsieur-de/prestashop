<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:28
  from 'module:poswishlistviewstemplateshookposwishlist_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df1ca9d206_67991434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5ee322d4a46ad94d32d8f4a0e360549e1baf082' => 
    array (
      0 => 'module:poswishlistviewstemplateshookposwishlist_button.tpl',
      1 => 1727966039,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6704df1ca9d206_67991434 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="addToWishlist" href="#" data-rel="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
', 1, '', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
'); return false;"  title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'wishlist','mod'=>'poswishlist'),$_smarty_tpl ) );?>
">
	<i class="icon-rt-heart-outline"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Wishlist",'mod'=>"poswishlist"),$_smarty_tpl ) );?>
</span>
</a><?php }
}
