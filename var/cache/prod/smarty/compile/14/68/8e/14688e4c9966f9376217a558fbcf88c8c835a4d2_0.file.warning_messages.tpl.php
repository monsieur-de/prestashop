<?php
/* Smarty version 4.3.4, created on 2024-09-26 11:05:09
  from '/opt/lampp/htdocs/prestashop/admin208qfgoushbdtcmpmx5/themes/new-theme/template/components/layout/warning_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f523c571deb5_34327236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14688e4c9966f9376217a558fbcf88c8c835a4d2' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/admin208qfgoushbdtcmpmx5/themes/new-theme/template/components/layout/warning_messages.tpl',
      1 => 1725437221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f523c571deb5_34327236 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['warnings']->value)) {?>
  <div class="bootstrap">
    <div class="alert alert-warning">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <?php if (count($_smarty_tpl->tpl_vars['warnings']->value) > 1) {?>
        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %d warnings.','sprintf'=>array(count($_smarty_tpl->tpl_vars['warnings']->value)),'d'=>'Admin.Notifications.Error'),$_smarty_tpl ) );?>
</h4>
      <?php }?>
      <ul class="list-unstyled">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['warnings']->value, 'warning');
$_smarty_tpl->tpl_vars['warning']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['warning']->value) {
$_smarty_tpl->tpl_vars['warning']->do_else = false;
?>
          <li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
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
