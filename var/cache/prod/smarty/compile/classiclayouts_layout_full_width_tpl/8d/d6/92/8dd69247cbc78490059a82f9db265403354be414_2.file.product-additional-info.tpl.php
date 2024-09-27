<?php
/* Smarty version 4.3.4, created on 2024-09-27 09:49:54
  from '/home/justine/Documents/md/prestashop/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f663a2569f99_93964954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dd69247cbc78490059a82f9db265403354be414' => 
    array (
      0 => '/home/justine/Documents/md/prestashop/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f663a2569f99_93964954 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
