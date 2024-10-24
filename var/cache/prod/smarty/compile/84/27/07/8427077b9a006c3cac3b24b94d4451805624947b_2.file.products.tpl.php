<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:28
  from 'C:\Users\nihmo\prestashop\modules\posthemeoptions\views\templates\front\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df1c8058c3_29171117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8427077b9a006c3cac3b24b94d4451805624947b' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\modules\\posthemeoptions\\views\\templates\\front\\products.tpl',
      1 => 1727966039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6704df1c8058c3_29171117 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pos-product-widget">
  <?php if ($_smarty_tpl->tpl_vars['vc_products']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['carousel_active']->value) {?>
      <div class="slick-slider-block <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['widget_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-slider_options="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slick_options']->value, ENT_QUOTES, 'UTF-8');?>
" data-slider_responsive="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slick_responsive']->value, ENT_QUOTES, 'UTF-8');?>
">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vc_products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <div class="slick-slide1">
              <div class="slick-slide-inner1">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['theme_template_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
              </div>
            </div>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          
      </div>
      <div class="slick-custom-navigation"></div>
    <?php } else { ?>
      <div class="product-grid">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vc_products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <div class="col-xl-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['columns_desktop']->value, ENT_QUOTES, 'UTF-8');?>
 col-md-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['columns_tablet']->value, ENT_QUOTES, 'UTF-8');?>
 col-xs-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['columns_mobile']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['theme_template_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
            </div>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    <?php }?>
  <?php } else { ?>
    <p>There's no product</p>
  <?php }?>
</div><?php }
}
