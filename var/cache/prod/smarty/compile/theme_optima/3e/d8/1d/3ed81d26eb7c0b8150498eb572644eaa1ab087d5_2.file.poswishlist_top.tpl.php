<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:28
  from 'C:\Users\nihmo\prestashop\modules\poswishlist\views\templates\hook\poswishlist_top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df1c23d018_31863906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ed81d26eb7c0b8150498eb572644eaa1ab087d5' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\modules\\poswishlist\\views\\templates\\hook\\poswishlist_top.tpl',
      1 => 1727966039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6704df1c23d018_31863906 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wishlist-top"> 
<a class="" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('poswishlist','mywishlist',array(),true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
	<?php if ($_smarty_tpl->tpl_vars['icon']->value) {?>
	<i class="wishlist-top-icon <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['icon']->value, ENT_QUOTES, 'UTF-8');?>
"></i> 
	<?php }?>
	<span class="wishlist-top-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','mod'=>'poswishlist'),$_smarty_tpl ) );?>
</span>
	<span class="wishlist-top-count"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['count_product']->value, ENT_QUOTES, 'UTF-8');?>
</span>
</a>
</div><?php }
}
