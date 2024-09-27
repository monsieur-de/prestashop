<?php
/* Smarty version 4.3.4, created on 2024-09-27 09:49:04
  from '/home/justine/Documents/md/prestashop/modules/pscartdropdown/views/templates/hook/pscartdropdown_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f6637048e0f1_80744078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a49729ed32e74fdf529071b31ad503e328364e1' => 
    array (
      0 => '/home/justine/Documents/md/prestashop/modules/pscartdropdown/views/templates/hook/pscartdropdown_header.tpl',
      1 => 1704791610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:pscartdropdown/views/templates/hook/pscartdropdown_cart_detailed.tpl' => 1,
    'module:pscartdropdown/views/templates/hook/pscartdropdown_detailed_totals.tpl' => 1,
  ),
),false)) {
function content_66f6637048e0f1_80744078 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['cartdropdown_params']->value['CHECKBOX_ACTIVATE'] == 1) {?>
<div id="pscarthover_shoppingcart" <?php if ($_smarty_tpl->tpl_vars['isMobile']->value == 1) {?>class="noscroll"<?php }?> style="display:hidden !important;">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78597985066f6637048ab98_54342777', 'cartdrop_overview');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51657384966f6637048b163_30989258', 'cartdrop_totals');
?>

<style media="screen">
    .blockcart {
    background-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cartdropdown_params']->value['PRIMARY_COLOR_CARTDROPDOWN'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 !important;
    touch-action: none !important;
    }
    #header .header-nav .cart-preview .shopping-cart {
        color: #ffffff !important;
        font-size: 22px !important;
    }
    .blockcart .header {
        color: #ffffff;
    }
</style>
</div>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
    let frontController = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['frontController']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
    let isMobileCartDropdown = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['isMobile']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
    let BgColor = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cartdropdown_params']->value['PRIMARY_COLOR_CARTDROPDOWN'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
    let CheckBoxActivate = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cartdropdown_params']->value['CHECKBOX_ACTIVATE'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
    let CheckBoxBlackPrice = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cartdropdown_params']->value['CHECKBOX_BLACKPRICE'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
    let CheckBoxMobile = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cartdropdown_params']->value['CHECKBOX_MOBILE'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
    let CheckBoxViewCart = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cartdropdown_params']->value['CHECKBOX_VIEW_CART'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
    let CheckBoxCheckoutNow = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cartdropdown_params']->value['CHECKBOX_CHECKOUT_NOW'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
<?php echo '</script'; ?>
>

<?php }
/* {block 'cartdrop_overview'} */
class Block_78597985066f6637048ab98_54342777 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cartdrop_overview' => 
  array (
    0 => 'Block_78597985066f6637048ab98_54342777',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('module:pscartdropdown/views/templates/hook/pscartdropdown_cart_detailed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
}
}
/* {/block 'cartdrop_overview'} */
/* {block 'cartdrop_totals'} */
class Block_51657384966f6637048b163_30989258 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cartdrop_totals' => 
  array (
    0 => 'Block_51657384966f6637048b163_30989258',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('module:pscartdropdown/views/templates/hook/pscartdropdown_detailed_totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
}
}
/* {/block 'cartdrop_totals'} */
}
