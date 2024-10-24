<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:28
  from 'C:\Users\nihmo\prestashop\modules\posthemeoptions\views\templates\front\menu-mobile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df1c3c8736_62250961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '898ddd6d4c827e501857894712854341d1d57e07' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\modules\\posthemeoptions\\views\\templates\\front\\menu-mobile.tpl',
      1 => 1727966039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6704df1c3c8736_62250961 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="menu-icon"><i class="icon-rt-bars-solid"></i></div> 
<div class="menu-mobile-content" id="mobile_menu_wrapper">
	<div class="menu-mobile-inner">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMegamenuMobileTop'),$_smarty_tpl ) );?>
 
		<?php if ($_smarty_tpl->tpl_vars['vmenu']->value) {?>
		<ul class="nav nav-mobile-menu" role="tablist"> 
			<li class="nav-item">
				<a class="nav-link active"  data-toggle="tab" href="#tab-mobile-megamenu" role="tab" aria-controls="mobile-megamenu" aria-selected="true"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','mod'=>'posthemeoptions'),$_smarty_tpl ) );?>
</a>
				
			</li>
			<li class="nav-item">
				<a class="nav-link"  data-toggle="tab" href="#tab-mobile-vegamenu" role="tab" aria-controls="mobile-vegamenu" aria-selected="true"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','mod'=>'posthemeoptions'),$_smarty_tpl ) );?>
</a>
			</li>
		</ul>
		<?php } else { ?>
		<h4 class="menu-mobile-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','mod'=>'posthemeoptions'),$_smarty_tpl ) );?>
</h4>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['vmenu']->value) {?>
		<div class="tab-content">
			<div class="tab-pane fade active in" id="tab-mobile-megamenu" role="tabpanel" aria-labelledby="megamenu-tab">
		<?php }?>
			<?php echo $_smarty_tpl->tpl_vars['hmenu']->value;?>
	
		<?php if ($_smarty_tpl->tpl_vars['vmenu']->value) {?>
			</div>
			<div class="tab-pane fade" id="tab-mobile-vegamenu" role="tabpanel" aria-labelledby="vegamenu-tab">
			<?php echo $_smarty_tpl->tpl_vars['vmenu']->value;?>

			</div>
		</div>
		<?php }?>
		<div class="menu-mobile-bottom">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMegamenuMobileBottom'),$_smarty_tpl ) );?>

			<div class="menu-close btn btn-primary"> 
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'posthemeoptions'),$_smarty_tpl ) );?>

			</div>
		</div>
	</div>
</div><?php }
}
