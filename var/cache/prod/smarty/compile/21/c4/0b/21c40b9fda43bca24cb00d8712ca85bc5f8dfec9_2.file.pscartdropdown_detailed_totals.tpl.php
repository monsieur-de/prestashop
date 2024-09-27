<?php
/* Smarty version 4.3.4, created on 2024-09-27 09:50:03
  from '/home/justine/Documents/md/prestashop/modules/pscartdropdown/views/templates/hook/pscartdropdown_detailed_totals.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f663ab0d1532_34708726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21c40b9fda43bca24cb00d8712ca85bc5f8dfec9' => 
    array (
      0 => '/home/justine/Documents/md/prestashop/modules/pscartdropdown/views/templates/hook/pscartdropdown_detailed_totals.tpl',
      1 => 1704791610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:pscartdropdown/views/templates/hook/pscartdropdown_detailed_actions.tpl' => 1,
  ),
),false)) {
function content_66f663ab0d1532_34708726 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176254240866f663ab0cc741_53599642', 'cartdrop_detailed_totals');
?>

<?php }
/* {block 'cartdrop_actions'} */
class Block_30766306666f663ab0cfba4_21986537 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('module:pscartdropdown/views/templates/hook/pscartdropdown_detailed_actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
    <?php
}
}
/* {/block 'cartdrop_actions'} */
/* {block 'cartdrop_detailed_totals'} */
class Block_176254240866f663ab0cc741_53599642 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cartdrop_detailed_totals' => 
  array (
    0 => 'Block_176254240866f663ab0cc741_53599642',
  ),
  'cartdrop_actions' => 
  array (
    0 => 'Block_30766306666f663ab0cfba4_21986537',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/justine/Documents/md/prestashop/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

<div id="total_block" class="cartdrop-detailed-totals card-block">
    <div style="text-align: center; margin-bottom: 10px;" class="cartdrop-summary-line cartdrop-total">
        <span style="color: #7a7a7a" class="label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
: <span style="font-weight: bold;" class="label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span></span>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['cartdropdown_params']->value['CHECKBOX_VIEW_CART'] == 1) {?>
    <div class="viewmycart text-sm-center">
        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['cartdropdown_params']->value['CHECKBOX_CHECKOUT_NOW'] == 1) {?>
        class="btnviewcart btn btn-outline-primary btn-block"
        onmouseover="this.style.background='<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cartdropdown_params']->value['PRIMARY_COLOR_CARTDROPDOWN'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';this.style.color='#FFF';"
        onmouseout="this.style.background='';this.style.color='<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cartdropdown_params']->value['PRIMARY_COLOR_CARTDROPDOWN'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';"
        style="background: transparent; border-color:<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cartdropdown_params']->value['PRIMARY_COLOR_CARTDROPDOWN'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
; color:<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cartdropdown_params']->value['PRIMARY_COLOR_CARTDROPDOWN'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;"
        <?php } else { ?>
        class="btn btn-primary btn-block" style="color: #fff;background-color:<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cartdropdown_params']->value['PRIMARY_COLOR_CARTDROPDOWN'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
        <?php }?>>
        <i class="material-icons shopping-cart-dropdown">shopping_cart</i>
        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my cart','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</span>
        <span class="cartdrop-products-count">(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
)</span>
        </a>
    </div>
    <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['cartdropdown_params']->value['CHECKBOX_CHECKOUT_NOW'] == 1) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30766306666f663ab0cfba4_21986537', 'cartdrop_actions', $this->tplIndex);
?>

    <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['cartdropdown_params']->value['CHECKBOX_MOBILE'] == 1 && $_smarty_tpl->tpl_vars['isMobile']->value == 1) {?>
    <div class="mobileclose">
        <a style="color:<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cartdropdown_params']->value['PRIMARY_COLOR_CARTDROPDOWN'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" id="close_cartdropdown_mobile" href="#">
        <i style="font-size: 36px;" class="material-icons">close</i>
        </a>
    </div>
    <?php }?>
        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['cart']->value['products']) > 3) {?>
    <style media="screen">

    #total_block {
        -moz-box-shadow: 0px -3px 6px 1px #ccc;
        -webkit-box-shadow: 0px -3px 6px 1px #ccc;
        -o-box-shadow: 0px -3px 6px 1px #ccc;
        box-shadow: 0px -3px 6px 1px #ccc;
    }
</style>

<?php }?>
</div>
<?php
}
}
/* {/block 'cartdrop_detailed_totals'} */
}
