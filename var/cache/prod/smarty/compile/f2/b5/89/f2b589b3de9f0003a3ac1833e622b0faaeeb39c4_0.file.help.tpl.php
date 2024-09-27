<?php
/* Smarty version 4.3.4, created on 2024-09-27 09:45:52
  from '/home/justine/Documents/md/prestashop/modules/pscartdropdown/views/templates/admin/tabs/help.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f662b0c79a04_45116911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2b589b3de9f0003a3ac1833e622b0faaeeb39c4' => 
    array (
      0 => '/home/justine/Documents/md/prestashop/modules/pscartdropdown/views/templates/admin/tabs/help.tpl',
      1 => 1704791610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f662b0c79a04_45116911 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/justine/Documents/md/prestashop/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<div class="panel col-lg-10 right-panel">
    <h3>
        <i class="fa fa-question-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Help & contact','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
 <small><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_display']->value,'htmlall','UTF-8' ));?>
</small>
    </h3>
    <div class="helpContentParent">
        <div class="helpContentLeft">
            <div class="left">
                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['logo_path']->value,'htmlall','UTF-8' ));?>
" alt=""/>
            </div>
            <div class="right">
                <p><span class="data_label" style="color:#00aff0;"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This module allows you to :','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</b></span></p>
                <br>
                <div>
                    <div class="numberCircle">1</div>
                    <div class="numberCircleText">
                    <p class="numberCircleText">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Activate or deactivate your cart dropdown','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>

                    </p>
                    </div>
                </div>
                <div>
                    <div class="numberCircle">2</div>
                    <div class="numberCircleText">
                    <p class="numberCircleText">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose the color of your cart dropdown and its call to action','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>

                    </p>
                    </div>
                </div>
                <div>
                    <div class="numberCircle">3</div>
                    <div class="numberCircleText">
                    <p class="numberCircleText">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Apply the same color as your theme on the prices of you products which are visible on your cart dropdown','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>

                    </p>
                    </div>
                </div>
                <div>
                    <div class="numberCircle">4</div>
                    <div class="numberCircleText">
                    <p class="numberCircleText">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Apply a call to action “View my cart” and/or “Check out” to redirect your clients to their shopping cart or to let them proceed to checkout immediately','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>

                    </p>
                    </div>
                </div>
                <div>
                    <div class="numberCircle">5</div>
                    <div class="numberCircleText">
                    <p class="numberCircleText">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Make sure you saved your changes to your cart dropdown in order to be applied on your shop','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>

                    </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="helpContentRight">
            <div class="helpContentRight-sub">
                <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Need help ?','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</b><br>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Find here the documentation of this module','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>

                <a class="btn btn-primary" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['doc']->value,'htmlall','UTF-8' ));?>
" target="_blank" style="margin-left:20px;" href="#">
                    <i class="fa fa-book"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Documentation','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</a>
                </a>
                <br><br>
                <div class="tab-pane panel" id="faq">
                    <div class="panel-heading"><i class="icon-question"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'FAQ','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['apifaq']->value, 'categorie', false, NULL, 'faq', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['categorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_faq']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_faq']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_faq']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_faq']->value['total'];
?>
                        <span class="faq-h1"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['categorie']->value->title,'htmlall','UTF-8' ));?>
</span>
                        <ul>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorie']->value->blocks, 'QandA');
$_smarty_tpl->tpl_vars['QandA']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['QandA']->value) {
$_smarty_tpl->tpl_vars['QandA']->do_else = false;
?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['QandA']->value->question)) {?>
                                    <li>
                                        <span class="faq-h2"><i class="icon-info-circle"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['QandA']->value->question,'htmlall','UTF-8' ));?>
</span>
                                        <p class="faq-text hide">
                                            <?php echo smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['QandA']->value->answer,'htmlall','UTF-8' )),"\n","<br />");?>

                                        </p>
                                    </li>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                        <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_faq']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_faq']->value['last'] : null)) {?><hr/><?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You couldn\'t find any answer to your question ?','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>

                <b><a href="http://addons.prestashop.com/contact-form.php" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us on PrestaShop Addons','mod'=>'pscartdropdown'),$_smarty_tpl ) );?>
</a></b>
            </div>
        </div>
    </div>
</div>
<?php }
}
