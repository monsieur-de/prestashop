<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:28
  from 'module:pospopupviewstemplateshookpospopup3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df1cce3ea7_57596941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29f713478436f3630a59ac91aa930866f46362ca' => 
    array (
      0 => 'module:pospopupviewstemplateshookpospopup3.tpl',
      1 => 1727966038,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6704df1cce3ea7_57596941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '11575159746704df1cce0870_13262947';
?>
<div id="posnewsletterpopup" class="posnewsletterpopup-style-3 text-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['text_color']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="pnp-close">
        <i class="icon-rt-close-outline"></i>
    </div>
	<div class="pnp-content-wrapper">
			<div class="pnp-image"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['popup_image']->value, ENT_QUOTES, 'UTF-8');?>
" alt="" /></div>
			<div class="pnp-content">
				<h3 class="pnp-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</h3>
				<div class="pnp-desc"><?php echo $_smarty_tpl->tpl_vars['txt']->value;?>
</div>
				<div class="pnp-newsletter-form">
					<form data-action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'index','params'=>array('fc'=>'module','module'=>'ps_emailsubscription','controller'=>'subscription')),$_smarty_tpl ) );?>
" method="post" class="flex-layout center-vertical">
						<input class="inputNew form-control grey newsletter-input" type="text" name="email" size="18"
							placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your e-mail','mod'=>'pospopup'),$_smarty_tpl ) );?>
" value=""/>
						<button type="submit" name="submitpNewsletter" class="btn btn-default pos-btn-newsletter">
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','mod'=>'pospopup'),$_smarty_tpl ) );?>
</span>
						</button>
						<input type="hidden" name="action" value="0"/>
					</form>
				</div>
				<div class="pnp-close-checkbox">
					<span class="custom-checkbox">
						<input type="checkbox" name="pnp-checkbox" id="pnp-checkbox"/>
						<span><i class="icon-rt-checkmark checkbox-checked"></i></span>
						<label for="pnp-checkbox"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not show again.','mod'=>'pospopup'),$_smarty_tpl ) );?>
</label>
					</span>
				</div>
			</div>
	</div>
</div>
<div id="posnewsletterpopup-overlay"></div>
<?php }
}
