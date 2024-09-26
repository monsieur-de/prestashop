<?php
/* Smarty version 4.3.4, created on 2024-09-26 11:06:12
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f52404842967_01339772',
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
function content_66f52404842967_01339772 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/opt/lampp/htdocs/prestashop/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/9a/96/2b/9a962b6d925a5c2d7dd30982e50c247f9f1b9da5_2.file.helpers.tpl.php',
    'uid' => '9a962b6d925a5c2d7dd30982e50c247f9f1b9da5',
    'call_name' => 'smarty_template_function_renderLogo_100012740266f524047ca9a9_40167935',
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
