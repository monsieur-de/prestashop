<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:28
  from 'C:\Users\nihmo\prestashop\modules\posthemeoptions\views\templates\front\newsletter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df1cc8b746_59235517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a048c0215baa5188db79c6bc6acd0854bd4b9fc' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\modules\\posthemeoptions\\views\\templates\\front\\newsletter.tpl',
      1 => 1727966039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6704df1cc8b746_59235517 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pos-newsletter-widget block_newsletter">
<form class="pos-newsletter-form" action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
    <input name="email" type="email" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['placeholder'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['placeholder'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
}?>" required >
	 <input
              class="hidden-xs-up"
              name="submitNewsletter"
              type="submit"
              value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
            >
   <button class="pos-newsletter-button" name="submitNewsletter" value="1" type="submit">
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_icon'] == 'yes') {?>
            <i class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['icon'], ENT_QUOTES, 'UTF-8');?>
"></i>
        <?php } else { ?>
            <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['subscribe_text'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php }?>
    </button>
    <input type="hidden" name="action" value="0">
    <div class="pos-newsletter-response"></div>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNewsletterRegistration'),$_smarty_tpl ) );?>

    <?php if ((isset($_smarty_tpl->tpl_vars['id_module']->value)) && !$_smarty_tpl->tpl_vars['settings']->value['disable_psgdpr']) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

    <?php }?>
</form>
</div><?php }
}
