<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:40
  from 'C:\Users\nihmo\prestashop\modules\posproductcomments\views\templates\hook\tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df282935c2_70541634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8df9ba0d74aa41ac44bf641c96403e6986c6195b' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\modules\\posproductcomments\\views\\templates\\hook\\tab.tpl',
      1 => 1727966038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6704df282935c2_70541634 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['postheme']->value['productp_tab'] == '0' || $_smarty_tpl->tpl_vars['postheme']->value['productp_tab'] == '1') {?>
<a class="nav-link" data-toggle="tab" href="#product_comments_block_tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','mod'=>'posproductcomments'),$_smarty_tpl ) );?>
</a>
<?php } else { ?>
<a class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" href="#product_comments_block_tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','mod'=>'posproductcomments'),$_smarty_tpl ) );?>
</a>
<?php }
}
}
