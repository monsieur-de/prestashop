<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:28
  from 'C:\Users\nihmo\prestashop\modules\posvegamenu\views\templates\hook\posvegamenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df1c158fd7_76375947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7656ca248857c89518a619fff1faf8c915cc2d91' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\modules\\posvegamenu\\views\\templates\\hook\\posvegamenu.tpl',
      1 => 1727966039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6704df1c158fd7_76375947 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\nihmo\\prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
$_smarty_tpl->compiled->nocache_hash = '4157026006704df1c102348_46615242';
?>

<div id="_desktop_vegamenu" class="main-menu">  
<div class="pos-menu-vertical behaviour-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu_config']->value['posvegamenu_behaviour'], ENT_QUOTES, 'UTF-8');?>
" data-more-less="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu_config']->value['posvegamenu_more_less'], ENT_QUOTES, 'UTF-8');?>
">
	<h3 class="title_vertical hidden-md-down"><i class="icon-rt-bars-solid"></i><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu_config']->value['posvegamenu_title'], ENT_QUOTES, 'UTF-8');?>
 </h3>
	<ul class="menu-content"> 
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menus']->value, 'menu', false, NULL, 'menus', array (
));
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
?>	 			
				<li class="<?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['menu']->value['link'] == $_prefixVariable2 && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>home<?php }?> menu-item menu-item<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['id_posvegamenu_item'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['item_class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['menu']->value['submenu_type'] == 0 && count($_smarty_tpl->tpl_vars['menu']->value['sub_menu']) > 0) {?>hasChild<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['menu']->value['selected_item'])) && $_smarty_tpl->tpl_vars['menu']->value['selected_item'] == 1) {?>active<?php }?>">
					
					<a  style="<?php if ($_smarty_tpl->tpl_vars['menu']->value['type_link'] == 2) {?>cursor: auto;<?php }?>" href="<?php if ($_smarty_tpl->tpl_vars['menu']->value['type_link'] == 0) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['menu']->value['type_link'] == 1) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['custom_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>" <?php if ($_smarty_tpl->tpl_vars['menu']->value['new_window'] == 1) {?> target="_blank" <?php }?>>
						
						<?php if ($_smarty_tpl->tpl_vars['menu']->value['type_icon'] == 2 && $_smarty_tpl->tpl_vars['menu']->value['icon'] != '') {?>
						<img class="img-icon" src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['icon'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt=""/>
						<?php } elseif ($_smarty_tpl->tpl_vars['menu']->value['type_icon'] == 1) {?>
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['icon_class'],'html','UTF-8' ));?>

						<?php }?>
						<span><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
						<?php if ($_smarty_tpl->tpl_vars['menu']->value['subtitle'] != '') {?><span class="menu-subtitle"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['subtitle'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['menu']->value['submenu_type'] == 0 && count($_smarty_tpl->tpl_vars['menu']->value['sub_menu']) > 0) {?> <i class="hidden-md-down icon_sub icon-rt-arrow-right"></i><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['menu']->value['submenu_type'] == 1 && $_smarty_tpl->tpl_vars['menu']->value['sub_menu']) {?> <i class="hidden-md-down icon_sub icon-rt-arrow-right"></i><?php }?> 
					</a>
					<?php if ($_smarty_tpl->tpl_vars['menu_config']->value['posvegamenu_sub_animation'] == 1) {?> 
						<?php $_smarty_tpl->_assignInScope('animation_class', 'menu_noanimation');?>
					<?php } elseif ($_smarty_tpl->tpl_vars['menu_config']->value['posvegamenu_sub_animation'] == 2) {?>
						<?php $_smarty_tpl->_assignInScope('animation_class', 'menu_slidedown');?>
					<?php } elseif ($_smarty_tpl->tpl_vars['menu_config']->value['posvegamenu_sub_animation'] == 3) {?>
						<?php $_smarty_tpl->_assignInScope('animation_class', 'menu_slideup');?>
					<?php } else { ?>
						<?php $_smarty_tpl->_assignInScope('animation_class', 'menu_slideleft');?> 
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['menu']->value['submenu_type'] == 0) {?>
						<?php if ((isset($_smarty_tpl->tpl_vars['menu']->value['sub_menu'])) && count($_smarty_tpl->tpl_vars['menu']->value['sub_menu']['info_rows']) > 0) {?>
						
						<?php if (count($_smarty_tpl->tpl_vars['menu']->value['sub_menu']) > 0) {?><span class="icon-drop-mobile"><i class="material-icons add">add </i><i class="material-icons remove">remove </i></span><?php }?>
						<div class="pos-sub-menu menu-dropdown col-xs-12 col-lg-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['sub_menu']['submenu_config']['submenu_width'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['sub_menu']['submenu_config']['submenu_class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['animation_class']->value, ENT_QUOTES, 'UTF-8');?>
">
							<div class="popup_vertical">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value['sub_menu']['info_rows'], 'menu_row', false, NULL, 'menu_row', array (
));
$_smarty_tpl->tpl_vars['menu_row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu_row']->value) {
$_smarty_tpl->tpl_vars['menu_row']->do_else = false;
?>
								<div class="pos-menu-row row <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['item_class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
									<?php if ((isset($_smarty_tpl->tpl_vars['menu_row']->value['list_col'])) && count($_smarty_tpl->tpl_vars['menu_row']->value['list_col']) > 0) {?>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu_row']->value['list_col'], 'menu_col', false, NULL, 'menu_col', array (
));
$_smarty_tpl->tpl_vars['menu_col']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu_col']->value) {
$_smarty_tpl->tpl_vars['menu_col']->do_else = false;
?>
											<div class="pos-menu-col <?php if ($_smarty_tpl->tpl_vars['menu_col']->value['width'] > 3) {?>col-xs-12<?php } else { ?>col-xs-6<?php }?> col-lg-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu_col']->value['width'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu_col']->value['class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php if (!$_smarty_tpl->tpl_vars['menu_col']->value['active_mobile']) {?>hidden-mobile<?php }?>">
												<?php if ($_smarty_tpl->tpl_vars['menu_col']->value['title']) {?>
													<?php if ($_smarty_tpl->tpl_vars['menu_col']->value['type_link'] == 0) {?>
														<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu_col']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="column_title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu_col']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
													<?php } elseif ($_smarty_tpl->tpl_vars['menu_col']->value['type_link'] == 1) {?>
														<?php if ($_smarty_tpl->tpl_vars['menu_col']->value['custom_link']) {?>
															<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu_col']->value['custom_link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu_col']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
														<?php } else { ?>
															<h4 class="column_title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu_col']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h4>
														<?php }?>
													<?php } else { ?>
														<h4 class="column_title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu_col']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h4>
													<?php }?>
													<span class="icon-drop-mobile"><i class="material-icons add">add </i><i class="material-icons remove">remove </i></span>
												<?php }?>
												<?php if (count($_smarty_tpl->tpl_vars['menu_col']->value['list_menu_item']) > 0) {?>
													<ul class="ul-column <?php if ($_smarty_tpl->tpl_vars['menu_col']->value['title']) {?>column_dropdown_vega <?php }?>">
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu_col']->value['list_menu_item'], 'sub_menu_item', false, NULL, 'sub_menu_item', array (
));
$_smarty_tpl->tpl_vars['sub_menu_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub_menu_item']->value) {
$_smarty_tpl->tpl_vars['sub_menu_item']->do_else = false;
?>
														<li class="submenu-item <?php if (!$_smarty_tpl->tpl_vars['sub_menu_item']->value['active_mobile']) {?>hidden-mobile<?php }?>">
															<?php if ($_smarty_tpl->tpl_vars['sub_menu_item']->value['type_link'] == 1) {?>
																<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_menu_item']->value['categories']['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_menu_item']->value['categories']['name'], ENT_QUOTES, 'UTF-8');?>
</a>
																<?php if ($_smarty_tpl->tpl_vars['sub_menu_item']->value['categories']['children']) {?><span class="icon-drop-mobile"><i class="material-icons add">add </i><i class="material-icons remove">remove </i></span><?php }?>
																<?php if ($_smarty_tpl->tpl_vars['sub_menu_item']->value['categories']['children']) {?>
																<ul class="category-sub-menu">
																	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_menu_item']->value['categories']['children'], 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
?>
																	  <li>
																		  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
																	  </li>
																	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																</ul>
																<?php }?>
															<?php } elseif ($_smarty_tpl->tpl_vars['sub_menu_item']->value['type_link'] == 2) {?>
																<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_menu_item']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_menu_item']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
															<?php } elseif ($_smarty_tpl->tpl_vars['sub_menu_item']->value['type_link'] == 3) {?>
																<?php if ($_smarty_tpl->tpl_vars['sub_menu_item']->value['customlink_title']) {?>
																	<?php if ($_smarty_tpl->tpl_vars['sub_menu_item']->value['customlink_link']) {?>
																		<a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub_menu_item']->value['customlink_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub_menu_item']->value['customlink_title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
																	<?php } else { ?>
																		<span><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub_menu_item']->value['customlink_title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
																	<?php }?>	
																<?php }?>
															
															<?php } elseif ($_smarty_tpl->tpl_vars['sub_menu_item']->value['type_link'] == 5) {?>
																<?php if ($_smarty_tpl->tpl_vars['sub_menu_item']->value['image']) {?>
																	<?php if ($_smarty_tpl->tpl_vars['sub_menu_item']->value['image_link']) {?>
																		<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_menu_item']->value['image_link'], ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_menu_item']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="" /></a>
																	<?php } else { ?>
																		<img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_menu_item']->value['image'], ENT_QUOTES, 'UTF-8');?>
" />
																	<?php }?>
																<?php }?>
															<?php } elseif ($_smarty_tpl->tpl_vars['sub_menu_item']->value['type_link'] == 6) {?>
																<?php if ($_smarty_tpl->tpl_vars['sub_menu_item']->value['htmlcontent']) {?>
																<div class="html-block">
																	<?php echo $_smarty_tpl->tpl_vars['sub_menu_item']->value['htmlcontent'];?>

																</div>
																<?php }?>
															<?php } elseif ($_smarty_tpl->tpl_vars['sub_menu_item']->value['type_link'] == 7) {?>
																<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_menu_item']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_menu_item']->value['manufacturer_logo'], ENT_QUOTES, 'UTF-8');?>
" /></a>
															<?php }?>
														</li>
													<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
													</ul>
												<?php }?>
											</div>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php }?>
								</div>

							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
						</div>
						<?php }?>
					<?php } elseif ($_smarty_tpl->tpl_vars['menu']->value['submenu_type'] == 1) {?>
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['menu']->value['sub_menu'],"/[\']/","&apos;"),'quotes','UTF-8' ));?>

					<?php }?>
				</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
	
</div>
</div><?php }
}
