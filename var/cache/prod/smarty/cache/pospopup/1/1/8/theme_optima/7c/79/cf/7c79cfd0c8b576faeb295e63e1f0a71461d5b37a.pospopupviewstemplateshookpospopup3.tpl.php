<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:28
  from 'module:pospopupviewstemplateshookpospopup3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df1ccf1fa3_39108751',
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
  'cache_lifetime' => 31536000,
),true)) {
function content_6704df1ccf1fa3_39108751 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="posnewsletterpopup" class="posnewsletterpopup-style-3 text-dark">
    <div class="pnp-close">
        <i class="icon-rt-close-outline"></i>
    </div>
	<div class="pnp-content-wrapper">
			<div class="pnp-image"><img src="" alt="" /></div>
			<div class="pnp-content">
				<h3 class="pnp-title">Recevez nos newsletters</h3>
				<div class="pnp-desc"><p>Subscribe to our newsletters now and stay up-to-date with new collections, the latest lookbooks and exclusive offers.</p></div>
				<div class="pnp-newsletter-form">
					<form data-action="//localhost/prestashop/?fc=module&module=ps_emailsubscription&controller=subscription" method="post" class="flex-layout center-vertical">
						<input class="inputNew form-control grey newsletter-input" type="text" name="email" size="18"
							placeholder="Enter your e-mail" value=""/>
						<button type="submit" name="submitpNewsletter" class="btn btn-default pos-btn-newsletter">
							<span>Subscribe</span>
						</button>
						<input type="hidden" name="action" value="0"/>
					</form>
				</div>
				<div class="pnp-close-checkbox">
					<span class="custom-checkbox">
						<input type="checkbox" name="pnp-checkbox" id="pnp-checkbox"/>
						<span><i class="icon-rt-checkmark checkbox-checked"></i></span>
						<label for="pnp-checkbox">Do not show again.</label>
					</span>
				</div>
			</div>
	</div>
</div>
<div id="posnewsletterpopup-overlay"></div>
<?php }
}
