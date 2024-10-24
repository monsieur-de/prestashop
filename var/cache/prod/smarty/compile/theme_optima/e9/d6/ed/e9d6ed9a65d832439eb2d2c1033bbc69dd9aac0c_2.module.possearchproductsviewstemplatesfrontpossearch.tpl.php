<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:28
  from 'module:possearchproductsviewstemplatesfrontpossearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df1c1d72c4_03724663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9d6ed9a65d832439eb2d2c1033bbc69dd9aac0c' => 
    array (
      0 => 'module:possearchproductsviewstemplatesfrontpossearch.tpl',
      1 => 1727966039,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6704df1c1d72c4_03724663 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="pos-search-wrapper">
	<form class="pos-search <?php if ($_smarty_tpl->tpl_vars['show_categories']->value && $_smarty_tpl->tpl_vars['search_type']->value != 'minimal') {?>pos-search-categories<?php }?> <?php if ($_smarty_tpl->tpl_vars['search_type']->value == 'dropdown' || $_smarty_tpl->tpl_vars['search_type']->value == 'topbar') {?>js-dropdown<?php }?> search-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_type']->value, ENT_QUOTES, 'UTF-8');?>
" role="search" action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
" data-search-controller-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
" method="get">
		<?php if ($_smarty_tpl->tpl_vars['search_type']->value == 'dropdown' || $_smarty_tpl->tpl_vars['search_type']->value == 'topbar') {?>
            <div class="pos-search__toggle" data-toggle="dropdown">
                <i class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['icon']->value, ENT_QUOTES, 'UTF-8');?>
" aria-hidden="true"></i>
            </div>
            <div class="dropdown-menu">
        <?php }?>
				<div class="pos-search__container">
					<div class="search-input-container">
						<?php if ($_smarty_tpl->tpl_vars['search_type']->value == 'minimal') {?><i class="icon-minimal <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['icon']->value, ENT_QUOTES, 'UTF-8');?>
" aria-hidden="true"></i><?php }?>
						<input type="hidden" name="order" value="product.position.desc">
						<input class="pos-search__input" type="search" name="s" autocomplete="off" placeholder="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['placeholder']->value, ENT_QUOTES, 'UTF-8');?>
" />
						<?php if ($_smarty_tpl->tpl_vars['show_categories']->value && $_smarty_tpl->tpl_vars['search_type']->value != 'minimal') {?>
							<input type="hidden" name="cat" value="" id="search-cat">
							<div class="search-category-items">             	
								<a href="#" class="search-selected-cat" data-id="0"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All categories','mod'=>'possearchproducts'),$_smarty_tpl ) );?>
</span><i class="icon-rt-arrow-down"></i></a> 
								<ul class="dropdown-search">
									<li><a href="#" class="search-cat-value" data-id="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All categories','mod'=>'possearchproducts'),$_smarty_tpl ) );?>
</a></li>
									<?php echo $_smarty_tpl->tpl_vars['options']->value;?>

								</ul>
							</div>
						<?php }?>
						<span class="search-clear unvisible"></span> 
					</div>
					<?php if ($_smarty_tpl->tpl_vars['search_type']->value == 'classic' || $_smarty_tpl->tpl_vars['search_type']->value == 'topbar') {?>
					<button class="pos-search__submit" type="submit">
						<?php if ($_smarty_tpl->tpl_vars['button_type']->value == 'icon') {?>
							<i class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['icon']->value, ENT_QUOTES, 'UTF-8');?>
" aria-hidden="true"></i>
						<?php } else { ?>
							<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['button_text']->value, ENT_QUOTES, 'UTF-8');?>

						<?php }?>
					</button>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['search_type']->value == 'dropdown') {?>
					<button class="pos-search__submit" type="submit">
						<i class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['icon']->value, ENT_QUOTES, 'UTF-8');?>
" aria-hidden="true"></i>
					</button>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['search_type']->value == 'topbar') {?>
						<div class="dialog-lightbox-close-button dialog-close-button">
							<i class="icon-rt-close-outline" aria-hidden="true"></i> 
						</div>
					<?php }?>
				</div>
				<div class="pos-search__result unvisible"></div>
        <?php if ($_smarty_tpl->tpl_vars['search_type']->value == 'dropdown' || $_smarty_tpl->tpl_vars['search_type']->value == 'topbar') {?>
        	</div>
        <?php }?>
	</form>
</div>
<?php }
}
