<?php
/* Smarty version 4.3.4, created on 2024-09-26 11:05:09
  from '/opt/lampp/htdocs/prestashop/admin208qfgoushbdtcmpmx5/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f523c5661c33_84696597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4799fb1e63d3373280d43b94b32fc76e6da9b5c' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/admin208qfgoushbdtcmpmx5/themes/new-theme/template/content.tpl',
      1 => 1725437221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f523c5661c33_84696597 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}