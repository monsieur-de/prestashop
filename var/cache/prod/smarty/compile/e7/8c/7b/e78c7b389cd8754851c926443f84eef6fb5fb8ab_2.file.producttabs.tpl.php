<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:28
  from 'C:\Users\nihmo\prestashop\modules\posthemeoptions\views\templates\front\producttabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df1ca35c36_69442328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e78c7b389cd8754851c926443f84eef6fb5fb8ab' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\modules\\posthemeoptions\\views\\templates\\front\\producttabs.tpl',
      1 => 1727966039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/customize/button-cart.tpl' => 1,
    'file:catalog/_partials/variant-links.tpl' => 1,
  ),
),false)) {
function content_6704df1ca35c36_69442328 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="pos-producttabs-widget display-items-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['classes']->value, ENT_QUOTES, 'UTF-8');?>
" data-ajax="1">
  <ul class="tab-titles nav navtab-products">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_titles']->value, 'tab_title', false, NULL, 'posTab', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['tab_title']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab_title']->value) {
$_smarty_tpl->tpl_vars['tab_title']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_posTab']->value['index']++;
?>
      <li class="nav-item" data-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab_title']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
        <a class="nav-link <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_posTab']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_posTab']->value['index'] : null) == 0) {?>active<?php }?>" data-toggle="tab" href="#tab-pane-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab_title']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab_title']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
      </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
  <div class="tab-content">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_contents']->value, 'tab_content', false, NULL, 'posTab', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['tab_content']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab_content']->value) {
$_smarty_tpl->tpl_vars['tab_content']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_posTab']->value['index']++;
?>
      <div class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_posTab']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_posTab']->value['index'] : null) == 0) {?>active<?php }?> tab-pane fade in" id="tab-pane-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab_content']->value['id'], ENT_QUOTES, 'UTF-8');?>
" data-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab_content']->value['id'], ENT_QUOTES, 'UTF-8');?>
" data-tab_content='<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab_content']->value['tab_data'], ENT_QUOTES, 'UTF-8');?>
'>
        <?php if ($_smarty_tpl->tpl_vars['tab_content']->value['products']) {?>
          <?php if ($_smarty_tpl->tpl_vars['carousel_active']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['specific_layout']->value) {?>
              <div class="tab-specific-layout">
                <div class="tabproduct-first-content">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_content']->value['products'], 'product', false, NULL, 'producttab', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_producttab']->value['index']++;
?>
                       <article class="thumbnail-container product-miniature js-product-miniature style_product2" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" >
                        <div class="img_block">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20393750576704df1c9dd442_05876650', 'product_thumbnail');
?>

                            <ul class="add-to-links">
                                <li>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                                </li>
                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListCompare'),$_smarty_tpl ) );
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_assignInScope('displayProductListCompare', $_prefixVariable3);?>
                                <?php if ($_smarty_tpl->tpl_vars['displayProductListCompare']->value) {?>
                                <li class="compare">	
                                    <a href="#" class="poscompare-add compare-button js-poscompare-add"  data-id_product="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
"   onclick="posCompare.addCompare($(this),<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
,'<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
','<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
'); return false;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to compare','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'compare','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></a>
                                </li>
                                <?php }?>
                                <li class="quick-view-item">
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12834046376704df1c9f5843_13263546', 'quick_view');
?>

                                </li>
                                
                            </ul> 
                        
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20612539866704df1c9f7383_11063040', 'product_flags');
?>

                        </div>
                        <div class="product_desc">
                            <div class="inner_desc">
                                
                                <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['id_manufacturer'])) && $_smarty_tpl->tpl_vars['show_brand']->value) {?>
                                <div class="manufacturer"><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'manufacturer','id'=>$_smarty_tpl->tpl_vars['product']->value['id_manufacturer']),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars((string) Manufacturer::getnamebyid($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']), ENT_QUOTES, 'UTF-8');?>
</a></div>
                                <?php }?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13263065646704df1c9fed58_42069154', 'product_name');
?>

                                <?php if ($_smarty_tpl->tpl_vars['show_rating']->value) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13862153266704df1ca0c567_24709852', 'product_reviews');
?>

                                <?php }?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1835525676704df1ca0ee97_81731682', 'product_price_and_shipping');
?>

                                <div class="cart">
                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/customize/button-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                                </div>
                            </div>
                        
                            <div class="variant-links">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15096321496704df1ca23728_02741856', 'product_variants');
?>
 
                            </div>
                        
                        </div>
                      </article>
                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_producttab']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_producttab']->value['index'] : null) == 0) {?> <?php break 1;?> <?php }?>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
                </div>
                <div class="tabproduct-second-content">
                  <div class="tabproduct-second-inner">
                    <div class="slick-slider-block <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-slider_options="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slick_options']->value, ENT_QUOTES, 'UTF-8');?>
" data-slider_responsive="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slick_responsive']->value, ENT_QUOTES, 'UTF-8');?>
">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_content']->value['products'], 'product', false, NULL, 'producttab', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_producttab']->value['index']++;
?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_producttab']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_producttab']->value['index'] : null) > 0) {?>
                        <div class="slick-slide1">
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['theme_template_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                        </div>
                        <?php }?>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      
                    </div>
                    <div class="slick-custom-navigation"></div>
                  </div>
                </div>
              </div>
            <?php } else { ?>
              <div class="slick-slider-block <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-slider_options="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slick_options']->value, ENT_QUOTES, 'UTF-8');?>
" data-slider_responsive="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slick_responsive']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_content']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                  <div class="slick-slide1">
                          <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['theme_template_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                  </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </div>
              <div class="slick-custom-navigation"></div>
            <?php }?>
            
          <?php } else { ?>
            <div class="product-grid">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_content']->value['products'], 'product');
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
        <?php }?>
      </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
</div><?php }
/* {block 'product_thumbnail'} */
class Block_20393750576704df1c9dd442_05876650 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_20393750576704df1c9dd442_05876650',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
                            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
                            <img class="first-image lazyload"
                                data-src = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
                                alt = "<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
                                data-full-size-image-url = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
                            >
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"rotatorImg",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
	
                            </a>
                            <?php } else { ?>
                            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
                                <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" />
                            </a>
                            <?php }?>
                        <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'quick_view'} */
class Block_12834046376704df1c9f5843_13263546 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'quick_view' => 
  array (
    0 => 'Block_12834046376704df1c9f5843_13263546',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <a class="js-quick-view quick-view" href="#" data-link-action="quickview" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
                                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                                    </a>
                                    <?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_flags'} */
class Block_20612539866704df1c9f7383_11063040 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_20612539866704df1c9f7383_11063040',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <ul class="product-flag">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
                                <li class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span></li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                            <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_name'} */
class Block_13263065646704df1c9fed58_42069154 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_13263065646704df1c9fed58_42069154',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <h3 ><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="product_name <?php if ($_smarty_tpl->tpl_vars['name_length']->value == 0) {?>one_line<?php }?>" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],50,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3> 
                                <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_reviews'} */
class Block_13862153266704df1ca0c567_24709852 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_reviews' => 
  array (
    0 => 'Block_13862153266704df1ca0c567_24709852',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <div class="hook-reviews">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                                    </div>
                                <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_price_and_shipping'} */
class Block_1835525676704df1ca0ee97_81731682 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_1835525676704df1ca0ee97_81731682',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
                                    <div class="product-price-and-shipping">
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

                                        <span class="regular-price" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                                    <?php }?>

                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


                                    <span class="price <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>price-sale<?php }?>" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
                                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'custom_price', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'custom_price','hook_origin'=>'products_list'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                        <?php if ('' !== $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price')) {?>
                                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price');?>

                                        <?php } else { ?>
                                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

                                        <?php }?>
                                    </span>
                                        
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
                                        <span class="discount-percentage discount-product"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
                                        <span class="discount-amount discount-product"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
                                        <?php }?>
                                    <?php }?>
                                    </div>
                                <?php }?>
                                <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_variants'} */
class Block_15096321496704df1ca23728_02741856 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_variants' => 
  array (
    0 => 'Block_15096321496704df1ca23728_02741856',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, true);
?>
                            <?php }?>
                            <?php
}
}
/* {/block 'product_variants'} */
}
