<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:29:23
  from 'C:\Users\nihmo\prestashop\themes\theme_optima\templates\catalog\_partials\quickview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df5343ba24_43866555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c489ca2912b5a310cfc49c7a74a6e1f7d29d0ee' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\themes\\theme_optima\\templates\\catalog\\_partials\\quickview.tpl',
      1 => 1727966040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
  ),
),false)) {
function content_6704df5343ba24_43866555 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="quickview-modal-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" class="modal fade quickview" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="material-icons">close</i></span>
       </button>
     </div>
     <div class="modal-body">
      <div class="row">
        <div class="col-md-6">
			<div class="images-quickviews images-container">
			  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1877013216704df53433482_36308599', 'product_cover');
?>


			  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_968389316704df534359f2_45692465', 'product_images');
?>

			</div> 
        </div>
        <div class="col-md-6">
			
			  <h1 class="h1 namne_details"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
			  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReviewsProduct'),$_smarty_tpl ) );?>

			  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3687777756704df53438337_31879393', 'product_prices');
?>

			  <div class="product-information">
			  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18391942246704df53438d13_85223648', 'product_description_short');
?>

			  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14559926516704df53439484_22274563', 'product_buy');
?>

			 <div class="product-additional-info">
			 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

			 </div>
			</div>
        </div>
      </div>
     </div>
   
   </div>
 </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() {
	 $('.images-quickviews .quickviews-for').slick({
	   slidesToShow: 1,
	   slidesToScroll: 1,
	   focusOnSelect: true,
	   infinite: true,
	   arrows: false, 
	   fade: true,
	   lazyLoad: 'ondemand',
	   asNavFor: '.quickviews-nav'
	 });
	 $('.images-quickviews .quickviews-nav').slick({
	   slidesToShow: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['postheme']->value['productp_thumbnail_item'], ENT_QUOTES, 'UTF-8');?>
,
	   slidesToScroll: 1,
	   asNavFor: '.quickviews-for', 
	   dots: false, 
	   arrows: true, 
	   lazyLoad: 'ondemand',
	   focusOnSelect: true
	 });
	$('.modal').on('shown.bs.modal', function (e) {
		$('.images-quickviews .quickviews-for').slick("setPosition", 0);
		$('.images-quickviews .quickviews-nav').slick("setPosition", 0);
	}); 
	 $( '.images-quickviews img' ).load(function() {
		$('.images-quickviews .quickviews-for').slick("setPosition", 0);
		$('.images-quickviews .quickviews-nav').slick("setPosition", 0);   
	});  
});
<?php echo '</script'; ?>
><?php }
/* {block 'product_cover'} */
class Block_1877013216704df53433482_36308599 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover' => 
  array (
    0 => 'Block_1877013216704df53433482_36308599',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <div class="product-cover-container">
				<div class="product-cover quickviews-for ">
				 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
				 <div class="thumb-item" style="width:500px;">
				  <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>		
				   <img class="" style="width:100%;" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image">
				  <?php } else { ?>
					<img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" style="width:100%;">
				  <?php }?>
				   </div>
				 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			  </div>
			  <?php
}
}
/* {/block 'product_cover'} */
/* {block 'product_images'} */
class Block_968389316704df534359f2_45692465 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_968389316704df534359f2_45692465',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <ul class="product-images quickviews-nav">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
					  <div class="thumb-container">
						<div>
						<img
						  class="thumb js-thumb <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?> selected <?php }?>"
						  src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
						  alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
						  title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
						  width="100"
						  itemprop="image"
						>
						</div>
					  </div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				  </ul>

			  <?php
}
}
/* {/block 'product_images'} */
/* {block 'product_prices'} */
class Block_3687777756704df53438337_31879393 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_3687777756704df53438337_31879393',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			  <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
class Block_18391942246704df53438d13_85223648 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_18391942246704df53438d13_85223648',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div id="product-description-short"  class="product-description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
			  <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_variants'} */
class Block_17562338746704df5343a019_04328657 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_add_to_cart'} */
class Block_14500597576704df5343a5f3_21536094 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_refresh'} */
class Block_4825470876704df5343abe8_01100173 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_14559926516704df53439484_22274563 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_14559926516704df53439484_22274563',
  ),
  'product_variants' => 
  array (
    0 => 'Block_17562338746704df5343a019_04328657',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_14500597576704df5343a5f3_21536094',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_4825470876704df5343abe8_01100173',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="product-actions">
				  <form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
					<input type="hidden" name="token" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
					<input type="hidden" name="id_product" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
					<input type="hidden" name="id_customization" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17562338746704df5343a019_04328657', 'product_variants', $this->tplIndex);
?>


					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14500597576704df5343a5f3_21536094', 'product_add_to_cart', $this->tplIndex);
?>


										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4825470876704df5343abe8_01100173', 'product_refresh', $this->tplIndex);
?>

				</form>
			  </div>
			<?php
}
}
/* {/block 'product_buy'} */
}
