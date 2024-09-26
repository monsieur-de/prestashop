<?php
/* Smarty version 4.3.4, created on 2024-09-26 15:30:54
  from '/home/justine/Documents/md/prestashop/admin208qfgoushbdtcmpmx5/themes/new-theme/template/components/layout/information_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f5620e0596c3_41827268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f04665876e8e39bf3cb15867170cc15949e2851d' => 
    array (
      0 => '/home/justine/Documents/md/prestashop/admin208qfgoushbdtcmpmx5/themes/new-theme/template/components/layout/information_messages.tpl',
      1 => 1725437221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f5620e0596c3_41827268 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['informations']->value)) && count($_smarty_tpl->tpl_vars['informations']->value) && $_smarty_tpl->tpl_vars['informations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-info">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <ul id="infos_block" class="list-unstyled">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['informations']->value, 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
          <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  </div>
<?php }
}
}
