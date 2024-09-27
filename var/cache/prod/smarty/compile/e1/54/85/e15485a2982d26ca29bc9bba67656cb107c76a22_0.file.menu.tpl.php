<?php
/* Smarty version 4.3.4, created on 2024-09-27 09:45:52
  from '/home/justine/Documents/md/prestashop/modules/pscartdropdown/views/templates/admin/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f662b0c43fc8_60390732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e15485a2982d26ca29bc9bba67656cb107c76a22' => 
    array (
      0 => '/home/justine/Documents/md/prestashop/modules/pscartdropdown/views/templates/admin/menu.tpl',
      1 => 1704791610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./tabs/cartdropdownConfiguration.tpl' => 1,
    'file:./tabs/help.tpl' => 1,
  ),
),false)) {
function content_66f662b0c43fc8_60390732 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="modulecontent" class="clearfix">
    <div id="pscartdropdown-menu">
        <div class="col-lg-2">
            <div class="list-group" v-on:click.prevent>
                <a href="#" class="list-group-item" v-bind:class="{ 'active': isActive('cartdropdownConfiguration') }" v-on:click="makeActive('cartdropdownConfiguration')"><i class="fa fa-gavel"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configuration','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</a>
                <?php if (($_smarty_tpl->tpl_vars['apifaq']->value != '')) {?>
                    <a href="#" class="list-group-item" v-bind:class="{ 'active': isActive('faq') }" v-on:click="makeActive('faq')"><i class="fa fa-question-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Help','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</a>
                <?php }?>
            </div>
            <div class="list-group" v-on:click.prevent>
                <a class="list-group-item" style="text-align:center"><i class="icon-info"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Version','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_version']->value,'htmlall','UTF-8' ));?>
 | <i class="icon-info"></i> PrestaShop <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ps_version']->value,'htmlall','UTF-8' ));?>
</a>
            </div>
        </div>
    </div>

        <div id="cartdropdownConfiguration" class="pscartdropdown_menu addons-hide">
        <?php $_smarty_tpl->_subTemplateRender("file:./tabs/cartdropdownConfiguration.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <div id="faq" class="pscartdropdown_menu addons-hide">
        <?php if (($_smarty_tpl->tpl_vars['apifaq']->value != '')) {?>
            <?php $_smarty_tpl->_subTemplateRender("file:./tabs/help.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    </div>

</div>


<?php echo '<script'; ?>
 type="text/javascript">
    let base_url = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ps_base_dir']->value,'htmlall','UTF-8' ));?>
";
    let isPs17 = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['isPs17']->value,'htmlall','UTF-8' ));?>
";
    let currentPage = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentPage']->value,'htmlall','UTF-8' ));?>
";
    let moduleAdminLink = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['moduleAdminLink']->value,'htmlall','UTF-8' ));?>
";
    let moduleName = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_name']->value,'htmlall','UTF-8' ));?>
";
    let ps_version = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['isPs17']->value,'htmlall','UTF-8' ));?>
";
<?php echo '</script'; ?>
>

<?php }
}
