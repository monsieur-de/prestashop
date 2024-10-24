<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__69bc9139c1522d4bf0bda9db4b7ecfe7 */
class __TwigTemplate_1fa2ef22c20d895ed31113865bd50e46 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Accueil • Monsieur Dé</title>

  <script type=\"text/javascript\">
    var help_class_name = 'HOME';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '8.1.7';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique.';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '9cf5b58352a8a015ad4094921c56a04a';
    var currentIndex = 'index.php?controller=HOME';
    var employee_token = '11a481ecd4a6c07de2c217ce37f6acdc';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admin208qfgoushbdtcmpmx5/index.php/improve/modules/manage?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA';
    var admin_notification_get_link = '/prestashop/admin208qfgoushbdtcmpmx5/index.php/common/notifications?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/admin208qfgoushbdtcmpmx5/index.php/common/notifications/ack?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA';";
        // line 40
        echo "
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/prestashop/admin208qfgoushbdtcmpmx5/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/prestashop/admin208qfgoushbdtcmpmx5/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin208qfgoushbdtcmpmx5/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.9d2d6ef1.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin208qfgoushbdtcmpmx5/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxdesign/views/css/admin/dashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/smartblog/views/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admin208qfgoushbdtcmpmx5\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/admin208qfgoushbdtcmpmx5\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\";
var contextPsAcc";
        // line 70
        echo "ounts = {\"currentContext\":{\"type\":1,\"id\":1},\"psxName\":\"ps_edition_basic\",\"psIs17\":true,\"psAccountsVersion\":\"7.0.7\",\"psAccountsIsInstalled\":true,\"psAccountsInstallLink\":null,\"psAccountsIsEnabled\":true,\"psAccountsEnableLink\":\"http:\\/\\/localhost\\/prestashop\\/admin208qfgoushbdtcmpmx5\\/index.php\\/improve\\/modules\\/manage\\/action\\/enable\\/ps_accounts?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\",\"psAccountsIsUptodate\":true,\"psAccountsUpdateLink\":null,\"user\":{\"uuid\":null,\"email\":null,\"emailIsValidated\":false,\"isSuperAdmin\":true},\"backendUser\":{\"email\":\"contact@monsieurde.com\",\"employeeId\":1,\"isSuperAdmin\":true},\"currentShop\":{\"id\":\"1\",\"name\":\"Monsieur D\\u00e9\",\"domain\":\"localhost\",\"domainSsl\":\"localhost\",\"physicalUri\":\"\\/prestashop\\/\",\"virtualUri\":\"\",\"frontUrl\":\"https:\\/\\/localhost\\/prestashop\\/\",\"uuid\":null,\"publicKey\":\"-----BEGIN RSA PUBLIC KEY-----\\r\\nMIGJAoGBANds1b2CKY+\\/2ta5FSgivjR+3kkb1ZZJX44afFOnw96uxGEwDXfYyrsQ\\r\\n53YYR8cQ28RKVXtEw5hVcPr3NmIicke9rHROIgox6Awxlt1W5ScVUDs\\/0WyKAqNS\\r\\nwvaVd3Xv6YASGy04e2bo5eCZqUa3L1B40TbXFKxA116YWv1umL0bAgMBAAE=\\r\\n-----END RSA PUBLIC KEY-----\",\"employeeId\":null,\"user\":{\"email\":null,\"emailIsValidated\":false,\"uuid\":null},\"url\":\"http:\\/\\/localhost\\/prestashop\\/admin208qfgoushbdtcmpmx5\\/index.php?controller=AdminModules&configure=ps_edition_basic&setShopContext=s-1&token=c31110dde518406e1b162c7af37941d1\",\"isLinkedV4\":false,\"unlinkedAuto\":false,\"multishop\":false,\"moduleName\":\"ps_edition_basic\",\"psVersion\":\"8.1.7\"},\"isShopContext\":true,\"superAdminEmail\":\"contact@monsieurde.com\",\"onboardingLink\":\"https:\\/\\/accounts.distribution.prestashop.net?shops=W3siaWQiOiIxIiwibmFtZSI6Ik1vbnNpZXVyIERcdTAwZTkiLCJkb21haW4iOiJsb2NhbGhvc3QiLCJkb21haW5Tc2wiOiJsb2NhbGhvc3QiLCJwaHlzaWNhbFVyaSI6IlwvcHJlc3Rhc2hvcFwvIiwidmlydHVhbFVyaSI6IiIsImZyb250VXJsIjoiaHR0cHM6XC9cL2xvY2FsaG9zdFwvcHJlc3Rhc2hvcFwvIiwidXVpZCI6bnVsbCwicHVibGljS2V5IjoiLS0tLS1CRUdJTiBSU0EgUFVCTElDIEtFWS0tLS0tXHJcbk1JR0pBb0dCQU5kczFiMkNLWStcLzJ0YTVGU2dpdmpSKzNra2IxWlpKWDQ0YWZGT253OTZ1eEdFd0RYZl";
        echo "l5cnNRXHJcbjUzWVlSOGNRMjhSS1ZYdEV3NWhWY1ByM05tSWlja2U5ckhST0lnb3g2QXd4bHQxVzVTY1ZVRHNcLzBXeUtBcU5TXHJcbnd2YVZkM1h2NllBU0d5MDRlMmJvNWVDWnFVYTNMMUI0MFRiWEZLeEExMTZZV3YxdW1MMGJBZ01CQUFFPVxyXG4tLS0tLUVORCBSU0EgUFVCTElDIEtFWS0tLS0tIiwiZW1wbG95ZWVJZCI6IjEiLCJ1c2VyIjp7ImVtYWlsIjpudWxsLCJlbWFpbElzVmFsaWRhdGVkIjpmYWxzZSwidXVpZCI6bnVsbH0sInVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdFwvcHJlc3Rhc2hvcFwvYWRtaW4yMDhxZmdvdXNoYmR0Y21wbXg1XC9pbmRleC5waHA\\/Y29udHJvbGxlcj1BZG1pbk1vZHVsZXMmY29uZmlndXJlPXBzX2VkaXRpb25fYmFzaWMmc2V0U2hvcENvbnRleHQ9cy0xJnRva2VuPWMzMTExMGRkZTUxODQwNmUxYjE2MmM3YWYzNzk0MWQxIiwiaXNMaW5rZWRWNCI6ZmFsc2UsInVubGlua2VkQXV0byI6ZmFsc2UsIm11bHRpc2hvcCI6ZmFsc2UsIm1vZHVsZU5hbWUiOiJwc19lZGl0aW9uX2Jhc2ljIiwicHNWZXJzaW9uIjoiOC4xLjcifV0=\",\"ssoResendVerificationEmail\":\"https:\\/\\/auth.prestashop.com\\/account\\/send-verification-email\",\"manageAccountLink\":\"https:\\/\\/auth.prestashop.com\\/login?lang=fr\",\"isOnboardedV4\":false,\"shops\":[{\"id\":\"1\",\"name\":\"Default\",\"shops\":[{\"id\":\"1\",\"name\":\"Monsieur D\\u00e9\",\"domain\":\"localhost\",\"domainSsl\":\"localhost\",\"physicalUri\":\"\\/prestashop\\/\",\"virtualUri\":\"\",\"frontUrl\":\"https:\\/\\/localhost\\/prestashop\\/\",\"uuid\":null,\"publicKey\":\"-----BEGIN RSA PUBLIC KEY-----\\r\\nMIGJAoGBANds1b2CKY+\\/2ta5FSgivjR+3kkb1ZZJX44afFOnw96uxGEwDXfYyrsQ\\r\\n53YYR8cQ28RKVXtEw5hVcPr3NmIicke9rHROIgox6Awxlt1W5ScVUDs\\/0WyKAqNS\\r\\nwvaVd3Xv6YASGy04e2bo5eCZqUa3L1B40TbXFKxA116YWv1umL0bAgMBAAE=\\r\\n-----END RSA PUBLIC KEY-----\",\"employeeId\":null,\"user\":{\"email\":null,\"emailIsValidated\":false,\"uuid\":null},\"url\":\"http:\\/\\/localhost\\/prestashop\\/admin208qfgoushbdtcmpmx5\\/index.php?controller=AdminModules&configure=ps_edition_basic&setShopContext=s-1&token=c31110dde518406e1b162c7af37941d1\",\"isLinkedV4\":false,\"unlinkedAuto\":false,\"multishop\":false,\"moduleName\":\"ps_edition_basic\",\"psVersion\":\"8.1.7\",\"moduleVersion\":\"7.0.7\"}],\"multishop\":false,\"moduleName\":\"ps_edition_basic\",\"psVersion\":\"8.1.7\"}],\"adminAjaxLink\":\"http:\\/\\/localhost\\/prestashop\\/admin208qfgoushbdtcmpmx5\\/index.php?controller=AdminAjaxP";
        echo "sAccounts&ajax=1&token=652bb2211baed1ca9bd563c56182fe10\",\"accountsUiUrl\":\"https:\\/\\/accounts.distribution.prestashop.net\",\"dependencies\":{\"ps_eventbus\":{\"isInstalled\":true,\"installLink\":\"http:\\/\\/localhost\\/prestashop\\/admin208qfgoushbdtcmpmx5\\/index.php\\/improve\\/modules\\/manage\\/action\\/install\\/ps_eventbus?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\",\"isEnabled\":true,\"enableLink\":\"http:\\/\\/localhost\\/prestashop\\/admin208qfgoushbdtcmpmx5\\/index.php\\/improve\\/modules\\/manage\\/action\\/enable\\/ps_eventbus?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\"}}};
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var psxDesignUpdateNotification = \"\\n<div class=\\\"psxdesign-notification\\\">\\n  1\\n<\\/div>\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin208qfgoushbdtcmpmx5/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script ty";
        // line 83
        echo "pe=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=8.1.7\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin208qfgoushbdtcmpmx5/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=8.1.7\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin208qfgoushbdtcmpmx5/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin208qfgoushbdtcmpmx5/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=4.11.4\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <style>
i.mi-ce {
\tfont-size: 14px !important;
}
i.icon-AdminParentCEContent, i.mi-ce {
\tposition: relative;
\theight: 1em;
\twidth: 1.2857em;
}
i.icon-AdminParentCEContent:before, i.mi-ce:before,
i.icon-AdminParentCEContent:after, i.mi-ce:after {
\tcontent: '';
\tposition: absolute;
\tmargin: 0;
\tleft: .2143em;
\ttop: 0;
\twidth: .9286em;
\theight: .6428em;
\tborder-width: .2143em 0;
\tborder-style: solid;
\tborder-color: inherit;
\tbox-sizing: content-box;
}
i.icon-AdminParentCEContent:after, i.mi-ce:after {
\ttop: .4286em;
\twidth: .6428em;
\theight: 0;
\tborder-width: .2143em 0 0;
}
#maintab-AdminParentCreativeElements, #subtab-AdminParentCreativeElements {
\tdisplay: none;
}
</style>
<script>
            var admin";
        // line 130
        echo "_gamification_ajax_url = \"http:\\/\\/localhost\\/prestashop\\/admin208qfgoushbdtcmpmx5\\/index.php?controller=AdminGamification&token=e6fa51f96b876891cdf3a6e7b53eff3e\";
            var current_id_tab = 143;
        </script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop/admin208qfgoushbdtcmpmx5/index.php/common/notifications?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
    <script>
        window.userLocale  = 'fr';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script type=\"module\" src=\"/prestashop/modules/psxdesign/views/js/upgrade-notification.js\"></script>


";
        // line 152
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr home\"
  data-base-url=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php\"  data-token=\"stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/modules/pseditionbasic/homepage?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\"></a>
      <span id=\"shop_version\">8.1.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php/sell/orders?token=713769d472933f48b96a0e6c35622111\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=ce93815b6dccfb085e7278de79482c25\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php/improve/modules/manage?token=713769d472933f48b96a0e6c35622111\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=6ee660b2e37bfa09fad5d081abd848a5\"
        ";
        // line 187
        echo "         data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php/sell/catalog/products-v2/create?token=713769d472933f48b96a0e6c35622111\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php/sell/catalog/categories/new?token=713769d472933f48b96a0e6c35622111\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminModules&amp;&amp;configure=smartblog&amp;token=c31110dde518406e1b162c7af37941d1\"
                 data-item=\"Smart Blog Setting\"
      >Smart Blog Setting</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"172\"
        data-icon=\"\"
        data-method=\"add\"
        data-url=\"index.php/modules/pseditionbasic/homepage\"
        data-post-link=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminQuickAccesses&token=6f1d452ad0d1f4a55c04103e79e76975\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Bienvenue - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminQuickAccesses&token=6f1d452ad0d1f4a55c04103e79e76975\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div ";
        // line 224
        echo "class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminSearch&amp;token=29d8ee10213af64f6b974af3bc1ae3bc\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_";
        // line 244
        echo "basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php/sell/orders?token=713769d472933f48b96a0e6c35622111\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=ce93815b6dccfb085e7278de79482c25\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php/improve/modules/manage?token=713769d472933f48b96a0e6c35622111\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       hre";
        // line 279
        echo "f=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=6ee660b2e37bfa09fad5d081abd848a5\"
             data-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php/sell/catalog/products-v2/create?token=713769d472933f48b96a0e6c35622111\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php/sell/catalog/categories/new?token=713769d472933f48b96a0e6c35622111\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminModules&amp;&amp;configure=smartblog&amp;token=c31110dde518406e1b162c7af37941d1\"
             data-item=\"Smart Blog Setting\"
    >Smart Blog Setting</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"108\"
      data-icon=\"\"
      data-method=\"add\"
      data-url=\"index.php/modules/pseditionbasic/homepage\"
      data-post-link=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminQuickAccesses&token=6f1d452ad0d1f4a55c04103e79e76975\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Bienvenue - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminQuickAccesses&token=6f1d452ad0d1f4a55c04103e79e76975\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-back";
        // line 316
        echo "ground d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"";
        // line 370
        echo "
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=2264f31264790205a961737425f4b605\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_comp";
        // line 415
        echo "any_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashop/img/pr/default.jpg\" alt=\"Kévin\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Kévin</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/configure/advanced/employees/1/edit?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gérer votre compte PrestaShop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-fr&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener nor";
        // line 452
        echo "eferrer nofollow\">
            <i class=\"material-icons\">school</i> Formation
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-fr&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Trouver un expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA&utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-fr&utm_mbo_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Marketplace Prestashop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/fr?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=help-center-fr&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Centre d'assistance
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminLogin&amp;logout=1&amp;token=fa65839e810f2b19ab78b8570f983393\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/configure/advanced/employees/toggle-navigation?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9";
        // line 478
        echo "vkiDmapA\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/modules/pseditionbasic/homepage?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.7</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"143\" id=\"tab-HOME\">
                <span class=\"title\">Bienvenue</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"144\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/modules/pseditionbasic/homepage?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Accueil
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=Ad";
        // line 518
        echo "minDashboard&amp;token=d5ea99c89532a78b4a427c94e4e72553\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Tableau de bord
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/sell/orders/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                             ";
        // line 556
        echo " <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/sell/orders/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/sell/orders/invoices/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/sell/orders/credit-slips/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/sell/orders/delivery-slips/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                             ";
        // line 585
        echo "                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminCarts&amp;token=2264f31264790205a961737425f4b605\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/sell/catalog/products?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/sell/catalog/products?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Produits
     ";
        // line 615
        echo "                           </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/sell/catalog/categories?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/sell/catalog/monitoring/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminAttributesGroups&amp;token=d0e47ddcbb3a80b18c8456d14cf07060\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-A";
        // line 645
        echo "dminParentManufacturers\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/sell/catalog/brands/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/sell/attachments/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminCartRules&amp;token=6ee660b2e37bfa09fad5d081abd848a5\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/sell/stocks/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </";
        // line 674
        echo "ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/sell/customers/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/sell/customers/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/sell/addresses/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Adresses
                   ";
        // line 704
        echo "             </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminCustomerThreads&amp;token=83628c4014c2f0c6543a0b072087408b\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminCustomerThreads&amp;token=83628c4014c2f0c6543a0b072087408b\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"";
        // line 735
        echo "subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/sell/customer-service/order-messages/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminReturn&amp;token=f9c85a264ad1cf5c7f690dd8d729e8f1\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/modules/metrics/legacy/stats?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                              ";
        // line 765
        echo "                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"138\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/modules/metrics/legacy/stats?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"139\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/modules/metrics?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"180\" id=\"subtab-AdminMondialrelaySettings\">
                    <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminMondialrelayLabelsGeneration&amp;token=fa15b6436ddc556a8f80e900ae392805\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Mondial Relay – InPost
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_a";
        // line 794
        echo "rrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-180\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"181\" id=\"subtab-AdminMondialrelayLabelsGeneration\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminMondialrelayLabelsGeneration&amp;token=fa15b6436ddc556a8f80e900ae392805\" class=\"link\"> Générer des étiquettes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"182\" id=\"subtab-AdminMondialrelayLabelsHistory\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminMondialrelayLabelsHistory&amp;token=27691c884e6cfa48ba16f40368402692\" class=\"link\"> Historique des étiquettes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"183\" id=\"subtab-AdminMondialrelayAccountSettings\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminMondialrelayAccountSettings&amp;token=876c4b47731546813245283615607023\" class=\"link\"> Paramètres du compte
                                </a>
                              </li>

   ";
        // line 822
        echo "                                                                               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"184\" id=\"subtab-AdminMondialrelayAdvancedSettings\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminMondialrelayAdvancedSettings&amp;token=e3188ec134efebf83b5626800a3f0363\" class=\"link\"> Paramètres avancés
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"185\" id=\"subtab-AdminMondialrelayCarriersSettings\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminMondialrelayCarriersSettings&amp;token=eef8c9b706b46b2e629f2a1ba87055c6\" class=\"link\"> Paramètres des transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"186\" id=\"subtab-AdminMondialrelayProcessLogger\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminMondialrelayProcessLogger&amp;token=077b1f2e314457174b10c498fda3af95\" class=\"link\"> Logs d&#039;Activité
                                </a>
                              </li>

                                                                                  
                              
                                                            
                           ";
        // line 849
        echo "   <li class=\"link-leveltwo\" data-submenu=\"187\" id=\"subtab-AdminMondialrelayHelp\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminMondialrelayHelp&amp;token=cf83ac68ed2aae29ce3a14baf8b06299\" class=\"link\"> Aide
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/modules/mbo/modules/catalog/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                        ";
        // line 881
        echo "          
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"173\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/modules/mbo/modules/catalog/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/improve/modules/manage?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=cbc712e7f6b746228a93a33fa3d7615b\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_ar";
        // line 910
        echo "row_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"170\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=cbc712e7f6b746228a93a33fa3d7615b\" class=\"link\"> Modules du thème
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"177\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/modules/mbo/themes/catalog/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"153\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/modules/improve/design/themes?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Personnalisation
                                </a>
                              </li>

                                                                                  
                            ";
        // line 939
        echo "  
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/improve/design/mail_theme/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/improve/design/cms-pages/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/improve/design/modules/positions/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminImages&amp;token=e8cc9bc937e5db068e74279d886340cd\" class=\"link\">";
        // line 966
        echo " Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/modules/link-widget/list?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"213\" id=\"subtab-AdminParentCEContent\">
                    <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminCEContent&amp;token=0aa13b2eec64af9c13249bdcf4a8967a\" class=\"link\">
                      <i class=\"material-icons mi-ce\">ce</i>
                      <span>
                      Creative Elements
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-213\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"214\" id=\"subtab-AdminCEContent\">
          ";
        // line 999
        echo "                      <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminCEContent&amp;token=0aa13b2eec64af9c13249bdcf4a8967a\" class=\"link\"> Contenu n’importe où
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"215\" id=\"subtab-AdminCETemplates\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminCETemplates&amp;token=8cc31f56728bf9f8aa4eb8df83cd5b9a\" class=\"link\"> Modèles enregistrés
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"216\" id=\"subtab-AdminCESettings\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminCESettings&amp;token=b3b6fe6ddbfb8a1010f0a59881d51ecb\" class=\"link\"> Réglages
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminCarriers&amp;token=84e9753ce98c6d86c2815a227a34b5d5\" class=\"link\">
";
        // line 1027
        echo "                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminCarriers&amp;token=84e9753ce98c6d86c2815a227a34b5d5\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/improve/shipping/preferences/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-Adm";
        // line 1058
        echo "inParentPayment\">
                    <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/improve/payment/payment_methods?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/improve/payment/payment_methods?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/improve/payment/preferences?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                        ";
        // line 1087
        echo "      
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/improve/international/localization/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/improve/international/localization/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/improve/international/zones/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Zones géographiques
                               ";
        // line 1115
        echo " </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/improve/international/taxes/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/improve/international/translations/settings?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"135\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminPsfacebookModule&amp;token=5d746d930b1e11b62a922c1a86e92647\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                          ";
        // line 1147
        echo "                          keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-135\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"136\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminPsfacebookModule&amp;token=5d746d930b1e11b62a922c1a86e92647\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"150\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=4b50b75adefdf906b4affd3190353e10\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"145\" id=\"sub";
        // line 1183
        echo "tab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/modules/pseditionbasic/settings?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/configure/shop/preferences/preferences?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                  ";
        // line 1213
        echo "              <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/configure/shop/preferences/preferences?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/configure/shop/order-preferences/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/configure/shop/product-preferences/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/configure/shop/customer-preferences/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Clients
                                </a>
                              </li>

                                               ";
        // line 1241
        echo "                                   
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/configure/shop/contacts/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/configure/shop/seo-urls/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminSearchConf&amp;token=3efcca687a09fd0667d0b005ac03e73f\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a";
        // line 1272
        echo " href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/configure/advanced/system-information/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/configure/advanced/system-information/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/configure/advanced/performance/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                ";
        // line 1300
        echo "            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/configure/advanced/administration/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/configure/advanced/emails/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/configure/advanced/import/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/configure/advanced/employees/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Équipe
                                </a>
              ";
        // line 1328
        echo "                </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/configure/advanced/sql-requests/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/configure/advanced/logs/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/configure/advanced/webservice-keys/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                     ";
        // line 1356
        echo "       
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/configure/advanced/feature-flags/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/configure/advanced/security/?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"125\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminKlaviyoPsConfig&amp;token=f29ae7579a4b6b58ed8053c9d988fed0\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                 ";
        // line 1386
        echo "                       </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"127\" id=\"subtab-AdminPsAssistantSettings\">
                    <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminPsAssistantSettings&amp;token=ae8ece8e3dd517a7e4272e8dcc297f5b\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Assistance By PrestaShop
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"192\" id=\"tab-PosThemeMenu\">
                <span class=\"title\">POSTHEMES</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"193\" id=\"subtab-PosModules\">
                    <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminPosThemeoptions&amp;token=7a4fba99cb7ad623e51d17d1586278fa\" class=\"link\">
                      <i class=\"material-icons mi-open_with\">open_with</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                 ";
        // line 1423
        echo "   keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-193\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"194\" id=\"subtab-AdminPosThemeoptions\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminPosThemeoptions&amp;token=7a4fba99cb7ad623e51d17d1586278fa\" class=\"link\"> - Theme settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"195\" id=\"subtab-AdminPosCookieLaw\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminPosCookieLaw&amp;token=a32ddd2aec532e670e0c63e992ef1e50\" class=\"link\"> - Cookie law
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"196\" id=\"subtab-AdminPosFakeOrder\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminPosFakeOrder&amp;token=39b0a53a48fb8a3a5d2bec30c9fd3aea\" class=\"link\"> - Fake orders
                                </a>
                              </li>

                                                                                  
                    ";
        // line 1452
        echo "          
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"197\" id=\"subtab-AdminPosPopup\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminPosPopup&amp;token=5e15b7bc133544914ebeb98a670c9dc9\" class=\"link\"> - Popup
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"198\" id=\"subtab-AdminPosProductExtraTabs\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminPosProductExtraTabs&amp;token=c55c7eb11b2d53bd64dbd89cd1bcce9d\" class=\"link\"> - Product Extra Tabs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"199\" id=\"subtab-AdminPosmegamenu\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminPosmegamenu&amp;token=e1c66a08fca222cce1a8045c2a8ea2b7\" class=\"link\"> - Mega menu
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"200\" id=\"subtab-AdminPosvegamenu\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminPosvegamenu&amp;toke";
        // line 1479
        echo "n=2c4305c9b4066262e00de025942fbd08\" class=\"link\"> - Vertical menu
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"201\" id=\"subtab-AdminPosStaticblocks\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminPosStaticblocks&amp;token=400f974bb2bb4129c8c8a82ad574687f\" class=\"link\"> - Pos Staticblocks
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"202\" id=\"subtab-AdminQuickmenuListing\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminQuickmenuListing&amp;token=183bff0f3da2ace321f430aa75a72a90\" class=\"link\"> - Mobile quick links
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"203\" id=\"subtab-AdminPosSizeChart\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminPosSizeChart&amp;token=805ca227adccb6d28baea10d37d92630\" class=\"link\"> - Size chart
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                         ";
        // line 1509
        echo "                     
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"204\" id=\"subtab-SMARTBLOG\">
                    <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminBlogPost&amp;token=be90fd844f8d5589ee13be4347a3bf66\" class=\"link\">
                      <i class=\"material-icons mi-announcement\">announcement</i>
                      <span>
                      Blog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-204\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"205\" id=\"subtab-AdminBlogPost\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminBlogPost&amp;token=be90fd844f8d5589ee13be4347a3bf66\" class=\"link\"> - Post
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"206\" id=\"subtab-AdminBlogCategory\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminBlogCategory&amp;token=c68aaf5f6d9e7b41cd8fae818e8abdda\" class=\"link\"> - Category
                                </a>
            ";
        // line 1538
        echo "                  </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"207\" id=\"subtab-AdminBlogcomment\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminBlogcomment&amp;token=6de8856d08d29f2d098db05eb835e8a3\" class=\"link\"> - Comments
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"208\" id=\"subtab-AdminImageType\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminImageType&amp;token=ecf12ce9b9beb191c961c9f32b912c2b\" class=\"link\"> - Image Type
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"209\" id=\"subtab-AdminSmartBlog\">
                                <a href=\"http://localhost/prestashop/admin208qfgoushbdtcmpmx5/index.php?controller=AdminSmartBlog&amp;token=ebbc14d9c4dc182091462f97d5cda752\" class=\"link\"> - Settings
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav ari";
        // line 1579
        echo "a-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/modules/pseditionbasic/homepage?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" aria-current=\"page\">Bienvenue</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Accueil          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"https://help.prestashop-project.org/fr/doc/HOME?version=8.1.7&amp;country=fr\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"https://help.prestashop-project.org/fr/doc/HOME?version=8.1.7&amp;country=fr\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        ";
        // line 1647
        echo "
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1652
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"/prestashop/admin208qfgoushbdtcmpmx5/index.php/modules/pseditionbasic/homepage?_token=stKpv4NTCFdiMJr1vnPgif_5XrG9c6aIGI9vkiDmapA\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1686
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 152
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1652
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1686
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__69bc9139c1522d4bf0bda9db4b7ecfe7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1887 => 1686,  1866 => 1652,  1855 => 152,  1846 => 1686,  1806 => 1652,  1799 => 1647,  1729 => 1579,  1686 => 1538,  1655 => 1509,  1623 => 1479,  1594 => 1452,  1563 => 1423,  1524 => 1386,  1492 => 1356,  1462 => 1328,  1432 => 1300,  1402 => 1272,  1369 => 1241,  1339 => 1213,  1307 => 1183,  1269 => 1147,  1235 => 1115,  1205 => 1087,  1174 => 1058,  1141 => 1027,  1111 => 999,  1076 => 966,  1047 => 939,  1016 => 910,  985 => 881,  951 => 849,  922 => 822,  892 => 794,  861 => 765,  829 => 735,  796 => 704,  764 => 674,  733 => 645,  701 => 615,  669 => 585,  638 => 556,  598 => 518,  556 => 478,  528 => 452,  489 => 415,  442 => 370,  386 => 316,  347 => 279,  310 => 244,  288 => 224,  249 => 187,  209 => 152,  185 => 130,  136 => 83,  119 => 70,  87 => 40,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__69bc9139c1522d4bf0bda9db4b7ecfe7", "");
    }
}