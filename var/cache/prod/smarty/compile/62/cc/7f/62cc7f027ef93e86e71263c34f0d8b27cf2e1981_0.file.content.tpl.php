<?php
/* Smarty version 4.3.4, created on 2024-10-08 09:28:17
  from 'C:\Users\nihmo\prestashop\admin208qfgoushbdtcmpmx5\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6704df11cd5377_10513703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62cc7f027ef93e86e71263c34f0d8b27cf2e1981' => 
    array (
      0 => 'C:\\Users\\nihmo\\prestashop\\admin208qfgoushbdtcmpmx5\\themes\\new-theme\\template\\content.tpl',
      1 => 1727366562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6704df11cd5377_10513703 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}