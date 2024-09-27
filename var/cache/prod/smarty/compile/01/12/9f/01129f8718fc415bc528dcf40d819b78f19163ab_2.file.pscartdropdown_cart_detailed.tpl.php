<?php
/* Smarty version 4.3.4, created on 2024-09-27 09:50:03
  from '/home/justine/Documents/md/prestashop/modules/pscartdropdown/views/templates/hook/pscartdropdown_cart_detailed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f663ab0acd96_86976607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01129f8718fc415bc528dcf40d819b78f19163ab' => 
    array (
      0 => '/home/justine/Documents/md/prestashop/modules/pscartdropdown/views/templates/hook/pscartdropdown_cart_detailed.tpl',
      1 => 1704791610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:pscartdropdown/views/templates/hook/pscartdropdown_detailed_product_line.tpl' => 1,
  ),
),false)) {
function content_66f663ab0acd96_86976607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61997565966f663ab0a9254_00018185', 'cartdrop_detailed_product');
?>

<?php }
/* {block 'cart_detailed_product_line'} */
class Block_118470506366f663ab0ab340_53603212 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('module:pscartdropdown/views/templates/hook/pscartdropdown_detailed_product_line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
        <?php
}
}
/* {/block 'cart_detailed_product_line'} */
/* {block 'cartdrop_detailed_product'} */
class Block_61997565966f663ab0a9254_00018185 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cartdrop_detailed_product' => 
  array (
    0 => 'Block_61997565966f663ab0a9254_00018185',
  ),
  'cart_detailed_product_line' => 
  array (
    0 => 'Block_118470506366f663ab0ab340_53603212',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/justine/Documents/md/prestashop/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

<div class="cartdrop-overview js-cartdrop" data-refresh-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'pscartdropdown','controller'=>'FrontAjaxCartDropdown','params'=>array('ajax'=>true,'action'=>'refresh')),$_smarty_tpl ) );?>
">
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['products']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product', false, NULL, 'products', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
    <div class="productcard cart-item-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118470506366f663ab0ab340_53603212', 'cart_detailed_product_line', $this->tplIndex);
?>

        <hr class="productseparator">
    </div>
    <?php if (is_array($_smarty_tpl->tpl_vars['product']->value['customizations']) && smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['customizations']) > 1) {?>
    <hr>
    <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
</div>
<?php
}
}
/* {/block 'cartdrop_detailed_product'} */
}
