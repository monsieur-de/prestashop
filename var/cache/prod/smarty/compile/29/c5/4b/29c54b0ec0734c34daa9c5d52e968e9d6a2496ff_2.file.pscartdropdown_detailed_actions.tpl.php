<?php
/* Smarty version 4.3.4, created on 2024-09-27 09:50:03
  from '/home/justine/Documents/md/prestashop/modules/pscartdropdown/views/templates/hook/pscartdropdown_detailed_actions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f663ab0e2f17_58474155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29c54b0ec0734c34daa9c5d52e968e9d6a2496ff' => 
    array (
      0 => '/home/justine/Documents/md/prestashop/modules/pscartdropdown/views/templates/hook/pscartdropdown_detailed_actions.tpl',
      1 => 1704791610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f663ab0e2f17_58474155 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200127555666f663ab0e1374_89027200', 'cartdrop_detailed_actions');
?>

<?php }
/* {block 'cartdrop_detailed_actions'} */
class Block_200127555666f663ab0e1374_89027200 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cartdrop_detailed_actions' => 
  array (
    0 => 'Block_200127555666f663ab0e1374_89027200',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="checkoutnow cartdrop-summary-line">
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired']) {?>
    <div class="alert alert-warning" role="alert">
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired'], ENT_QUOTES, 'UTF-8');?>

    </div>
    <div class="text-sm-center">
        <button style="opacity: 0.30 !important" type="button" class="btncheckout btn btn-primary btn-block disabled" disabled><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
    </div>
    <?php } elseif (empty($_smarty_tpl->tpl_vars['cart']->value['products'])) {?>
    <div class="text-sm-center">
        <button style="opacity: 0.30 !important" type="button" class="btncheckout btn btn-primary btn-block disabled" disabled><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
    </div>
    <?php } else { ?>
    <div class="text-sm-center">
        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['order'], ENT_QUOTES, 'UTF-8');?>
" class="btncheckout btn btn-primary btn-block" style="color: #fff; background-color:<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cartdropdown_params']->value['PRIMARY_COLOR_CARTDROPDOWN'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
        <i class="material-icons checkorder">&#xE876;</i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
    </div>
    <?php }?>
</div>
<?php
}
}
/* {/block 'cartdrop_detailed_actions'} */
}
