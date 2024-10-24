<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:40
  from 'C:\Users\nihmo\prestashop\themes\theme_optima\templates\catalog\product_layouts\product_layout1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df28002865_99932572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97c4c8361871feb3c515f105019db324a3747ad5' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\themes\\theme_optima\\templates\\catalog\\product_layouts\\product_layout1.tpl',
      1 => 1727966040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/product-tab.tpl' => 1,
  ),
),false)) {
function content_6704df28002865_99932572 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="row product-container product-layout1">
  <div class="col-md-6">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5515843206704df27f370c2_73257282', 'page_content_container');
?>

    </div>
    <div class="col-md-6">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9093505166704df27f38597_47181831', 'page_header_container');
?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayReviewsProduct"),$_smarty_tpl ) );?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2285488826704df27f3a742_60389075', 'product_prices');
?>


		<div class="product-information">
			 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12782806786704df27f3b199_85791077', 'product_description_short');
?>


			<?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
			  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8492031186704df27f3c9b0_81749153', 'product_customization');
?>

			<?php }?>

			<div class="product-actions">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5887586286704df27f3d736_10457480', 'product_buy');
?>


			</div>
		</div>
    </div>
	<div class="col-md-12">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8743763186704df28002051_38889263', 'product_tabs');
?>

	</div>
</div><?php }
/* {block 'product_cover_thumbnails'} */
class Block_17009320306704df27f37733_97912531 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_4600488656704df27f37472_91303999 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17009320306704df27f37733_97912531', 'product_cover_thumbnails', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_5515843206704df27f370c2_73257282 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_5515843206704df27f370c2_73257282',
  ),
  'page_content' => 
  array (
    0 => 'Block_4600488656704df27f37472_91303999',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_17009320306704df27f37733_97912531',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section class="page-content" id="content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4600488656704df27f37472_91303999', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
class Block_19726173226704df27f38b44_61201670 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_20563121406704df27f38889_01388688 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<h1 class="h1 namne_details" ><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19726173226704df27f38b44_61201670', 'page_title', $this->tplIndex);
?>
</h1>
		<?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_9093505166704df27f38597_47181831 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_9093505166704df27f38597_47181831',
  ),
  'page_header' => 
  array (
    0 => 'Block_20563121406704df27f38889_01388688',
  ),
  'page_title' => 
  array (
    0 => 'Block_19726173226704df27f38b44_61201670',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20563121406704df27f38889_01388688', 'page_header', $this->tplIndex);
?>

		<?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_2285488826704df27f3a742_60389075 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_2285488826704df27f3a742_60389075',
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
class Block_12782806786704df27f3b199_85791077 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_12782806786704df27f3b199_85791077',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <div id="product-description-short-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product-description" ><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
			<?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_8492031186704df27f3c9b0_81749153 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_customization' => 
  array (
    0 => 'Block_8492031186704df27f3c9b0_81749153',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
			  <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_15643857536704df27f3e7a3_62018426 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				  <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_16419270756704df27f40a10_87867723 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value,'showPackProductsPrice'=>$_smarty_tpl->tpl_vars['product']->value['show_price']), 0, true);
?>
						  <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_5855527916704df27f3f2b1_70010351 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
					  <section class="product-pack">
						<p class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
$_smarty_tpl->tpl_vars['product_pack']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
$_smarty_tpl->tpl_vars['product_pack']->do_else = false;
?>
						  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16419270756704df27f40a10_87867723', 'product_miniature', $this->tplIndex);
?>

						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</section>
					<?php }?>
				  <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_10218078046704df27f41ba6_62552104 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				  <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_add_to_cart'} */
class Block_6558670246704df27f42377_86153747 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				  <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'hook_display_reassurance'} */
class Block_21136906466704df28000760_20076302 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

				  <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_additional_info'} */
class Block_14359232906704df28000f62_75590484 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				  <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_refresh'} */
class Block_20590363276704df280017b2_53857193 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_5887586286704df27f3d736_10457480 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_5887586286704df27f3d736_10457480',
  ),
  'product_variants' => 
  array (
    0 => 'Block_15643857536704df27f3e7a3_62018426',
  ),
  'product_pack' => 
  array (
    0 => 'Block_5855527916704df27f3f2b1_70010351',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_16419270756704df27f40a10_87867723',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_10218078046704df27f41ba6_62552104',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_6558670246704df27f42377_86153747',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_21136906466704df28000760_20076302',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_14359232906704df28000f62_75590484',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_20590363276704df280017b2_53857193',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
				  <input type="hidden" name="token" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
				  <input type="hidden" name="id_product" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
				  <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">
				  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15643857536704df27f3e7a3_62018426', 'product_variants', $this->tplIndex);
?>

				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySizeChart'),$_smarty_tpl ) );?>
	
				  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5855527916704df27f3f2b1_70010351', 'product_pack', $this->tplIndex);
?>


				  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10218078046704df27f41ba6_62552104', 'product_discounts', $this->tplIndex);
?>


				  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6558670246704df27f42377_86153747', 'product_add_to_cart', $this->tplIndex);
?>

				  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21136906466704df28000760_20076302', 'hook_display_reassurance', $this->tplIndex);
?>

				  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14359232906704df28000f62_75590484', 'product_additional_info', $this->tplIndex);
?>


				  				  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20590363276704df280017b2_53857193', 'product_refresh', $this->tplIndex);
?>

				</form>
			  <?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_tabs'} */
class Block_8743763186704df28002051_38889263 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_tabs' => 
  array (
    0 => 'Block_8743763186704df28002051_38889263',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-tab.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php
}
}
/* {/block 'product_tabs'} */
}
