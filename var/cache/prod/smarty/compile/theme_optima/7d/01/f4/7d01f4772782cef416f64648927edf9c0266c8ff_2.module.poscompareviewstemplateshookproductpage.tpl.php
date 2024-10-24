<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:40
  from 'module:poscompareviewstemplateshookproductpage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df28171e95_88947066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d01f4772782cef416f64648927edf9c0266c8ff' => 
    array (
      0 => 'module:poscompareviewstemplateshookproductpage.tpl',
      1 => 1727966038,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6704df28171e95_88947066 (Smarty_Internal_Template $_smarty_tpl) {
?><button href="#" class="poscompare-add compare-button js-poscompare-add"  data-id_product="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->id )), ENT_QUOTES, 'UTF-8');?>
" onclick="posCompare.addCompare($(this),<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->id )), ENT_QUOTES, 'UTF-8');?>
, '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
'); return false;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to compare','mod'=>'poscompare'),$_smarty_tpl ) );?>
"><i class="icon-rt-ios-shuffle-strong"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to compare','mod'=>'poscompare'),$_smarty_tpl ) );?>
</button>  
<?php }
}
