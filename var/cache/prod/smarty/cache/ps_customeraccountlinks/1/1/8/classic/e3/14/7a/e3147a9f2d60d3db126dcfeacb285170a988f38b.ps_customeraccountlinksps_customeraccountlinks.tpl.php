<?php
/* Smarty version 4.3.4, created on 2024-09-26 15:25:28
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f560c8017623_80809268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1708963242,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_66f560c8017623_80809268 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/justine/Documents/md/prestashop/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/db/41/fa/db41fa2125b2206c35b33641b79acbd8575be0cf_2.file.helpers.tpl.php',
    'uid' => 'db41fa2125b2206c35b33641b79acbd8575be0cf',
    'call_name' => 'smarty_template_function_renderLogo_82113465466f560c7eabbf4_97116353',
  ),
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost/prestashop/mon-compte" rel="nofollow">
      Votre compte
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Votre compte</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li><a href="http://localhost/prestashop/suivi-commande-invite" title="Suivi de commande" rel="nofollow">Suivi de commande</a></li>
        <li><a href="http://localhost/prestashop/mon-compte" title="Identifiez-vous" rel="nofollow">Connexion</a></li>
        <li><a href="http://localhost/prestashop/inscription" title="Créez votre compte" rel="nofollow">Créez votre compte</a></li>
        <li>
  <a href="//localhost/prestashop/module/ps_emailalerts/account" title="Mes alertes">
    Mes alertes
  </a>
</li>

       
	</ul>
</div>
<?php }
}
