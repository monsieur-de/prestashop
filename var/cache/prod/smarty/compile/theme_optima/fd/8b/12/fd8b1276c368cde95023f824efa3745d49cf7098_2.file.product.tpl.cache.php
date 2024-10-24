<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:40
  from 'C:\Users\nihmo\prestashop\themes\theme_optima\templates\catalog\_partials\miniatures\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df28417396_28856951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd8b1276c368cde95023f824efa3745d49cf7098' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\themes\\theme_optima\\templates\\catalog\\_partials\\miniatures\\product.tpl',
      1 => 1727966040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/_product/grid1.tpl' => 1,
    'file:catalog/_partials/miniatures/_product/grid2.tpl' => 1,
    'file:catalog/_partials/miniatures/_product/grid3.tpl' => 1,
    'file:catalog/_partials/miniatures/_product/grid4.tpl' => 1,
    'file:catalog/_partials/miniatures/_product/grid5.tpl' => 1,
    'file:catalog/_partials/miniatures/_product/grid6.tpl' => 1,
  ),
),false)) {
function content_6704df28417396_28856951 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '6410621936704df2840f5e5_44524070';
if ($_smarty_tpl->tpl_vars['postheme']->value['grid_type'] == 1) {?>
  <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/_product/grid1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<?php } elseif ($_smarty_tpl->tpl_vars['postheme']->value['grid_type'] == 2) {?>
  <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/_product/grid2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['postheme']->value['grid_type'] == 3) {?>
  <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/_product/grid3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['postheme']->value['grid_type'] == 4) {?>
  <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/_product/grid4.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['postheme']->value['grid_type'] == 5) {?>
  <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/_product/grid5.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
  <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/_product/grid6.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
