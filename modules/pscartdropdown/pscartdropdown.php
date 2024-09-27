<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

class Pscartdropdown extends Module
{
    protected static $conf_fields = [
    'CHECKBOX_ACTIVATE',
    'PRIMARY_COLOR_CARTDROPDOWN',
    'CHECKBOX_BLACKPRICE',
    'CHECKBOX_MOBILE',
    'CHECKBOX_VIEW_CART',
    'CHECKBOX_CHECKOUT_NOW',
    ];

    /**
     * @var string
     */
    public $author_address;

    /**
     * @var string
     */
    public $js_path;

    /**
     * @var string
     */
    public $css_path;

    /**
     * @var string
     */
    public $docs_path;

    /**
     * @var string
     */
    public $logo_path;

    /**
     * @var string
     */
    public $img_path;

    /**
     * @var string|null
     */
    public $module_path;

    /**
     * @var bool
     */
    public $ps_version;

    /**
     * @var string
     */
    public $confirmUninstall;

    public function __construct()
    {
        $this->name = 'pscartdropdown';
        $this->tab = 'administration';
        $this->version = '1.1.1';
        $this->author = 'PrestaShop';
        $this->bootstrap = true;

        $this->module_key = 'e379cd4d1e823e5e4accaaab08079c5d';
        $this->author_address = '';

        parent::__construct();

        $this->displayName = $this->l('CartDropdown');
        $this->description = $this->l('This module adds a cart dropdown on your cart icon, to sum up the cart content for your customer and encourage him to finalize his order.');

        // Settings paths
        $this->js_path = $this->_path . 'views/js/';
        $this->css_path = $this->_path . 'views/css/';
        $this->img_path = $this->_path . 'views/img/';
        $this->docs_path = $this->_path . 'docs/';
        $this->logo_path = $this->_path . 'logo.png';
        $this->module_path = $this->_path;
        $this->ps_version = (bool) version_compare(_PS_VERSION_, '1.7', '>=');

        // Confirm uninstall
        $this->confirmUninstall = $this->l('Are you sure you want to uninstall this module?');
        $this->ps_versions_compliancy = ['min' => '1.7', 'max' => _PS_VERSION_];
    }

    /**
     * install()
     *
     * @return bool
     */
    public function install()
    {
        Configuration::updateValue('PRIMARY_COLOR_CARTDROPDOWN', '#231769');
        Configuration::updateValue('CHECKBOX_VIEW_CART', '1');

        return parent::install() && $this->registerHook('displayTop') && $this->registerHook('displayHeader');
    }

    public function uninstall()
    {
        foreach (Pscartdropdown::$conf_fields as $field) {
            Configuration::deleteByName($field);
        }
        if (parent::uninstall()) {
            $this->unregisterHook('displayTop');

            return true;
        }

        $this->_errors[] = $this->l('There was an error during the uninstallation. Please contact us through Addons website');

        return false;
    }

    /**
     * load dependencies in the configuration of the module
     */
    public function loadAsset()
    {
        // Load CSS
        $css = [
            $this->css_path . 'faq.css',
            $this->css_path . 'menu.css',
            $this->css_path . 'back.css',
            $this->css_path . 'fontawesome-all.min',
            $this->css_path . 'animate.css',
        ];

        $this->context->controller->addCSS($css, 'all');

        // Load JS
        $jss = [
            $this->js_path . 'vue.min.js',
            $this->js_path . 'faq.js',
            $this->js_path . 'menu.js',
            $this->js_path . 'back.js',
        ];
        $this->context->controller->addJqueryPlugin('colorpicker');
        $this->context->controller->addJS($jss);
    }

    /**
     * FAQ API
     */
    public function loadFaq()
    {
        include_once 'classes/APIFAQClass.php';
        $api = new APIFAQ();
        $faq = $api->getData($this->module_key, $this->version);

        return $faq;
    }

    /**
     * Load the configuration form
     */
    public function getContent()
    {
        $submit = '';
        if (Tools::isSubmit('submitCartDropdownConf')) {
            if ($this->saveForm()) {
                $submit = 'true';
            } else {
                $submit = 'error';
            }
        }
        if ($this->ps_version) {
            $params = ['configure' => $this->name];
            $moduleAdminLink = Context::getContext()->link->getAdminLink('AdminModules', true, [], $params);
        } else {
            $moduleAdminLink = Context::getContext()->link->getAdminLink('AdminModules', true) . '&configure=' . $this->name . '&module_name=' . $this->name;
        }
        $faq = $this->loadFaq(); // load faq from addons api
        $this->loadAsset(); // load js and css

        $params = $this->getParams();

        $id_lang = $this->context->language->id;
        $iso_lang = Language::getIsoById($id_lang);
        // get readme
        switch ($iso_lang) {
            case 'fr':
                $doc = $this->docs_path . 'readme_fr.pdf';
                break;
            default:
                $doc = $this->docs_path . 'readme_en.pdf';
                break;
        }

        // get current page
        $currentPage = 'cartdropdownConfiguration';
        $page = Tools::getValue('page');
        if (!empty($page)) {
            $currentPage = Tools::getValue('page');
        }
        // assign var to smarty
        $this->context->smarty->assign([
            'module_name' => $this->name,
            'module_version' => $this->version,
            'moduleAdminLink' => $moduleAdminLink,
            'module_display' => $this->displayName,
            'apifaq' => $faq,
            'submit' => $submit,
            'doc' => $doc,
            'cartdropdown_params' => $params,
            'logo_path' => $this->logo_path,
            'languages' => $this->context->controller->getLanguages(),
            'defaultFormLanguage' => (int) $this->context->employee->id_lang,
            'currentPage' => $currentPage,
            'ps_base_dir' => Tools::getHttpHost(true),
            'ps_version' => _PS_VERSION_,
            'isPs17' => $this->ps_version,
        ]);

        return $this->context->smarty->fetch($this->local_path . 'views/templates/admin/menu.tpl');
    }

    public function HookDisplayTop()
    {
        $cart_url = $this->getCartSummaryURL();
        $params = $this->getParams();
        $frontController = Context::getContext()->link->getModuleLink($this->name, 'FrontAjaxCartDropdown', [], true);
        $mobile = new Mobile_Detect();
        $mobiledetector = $mobile->isMobile();
        Media::addJsDef($params);

        $this->context->smarty->assign([
            'frontController' => $frontController,
            'cartdropdown_params' => $params,
            'productInCart' => Context::getContext()->cart->getProducts(),
            'cart_url' => $cart_url,
            'isMobile' => $mobiledetector,
        ]);

        return $this->display(__FILE__, 'views/templates/hook/pscartdropdown_header.tpl');
    }

    private function getCartSummaryURL()
    {
        return $this->context->link->getPageLink(
            'cart',
            null,
            $this->context->language->id,
            [
                'action' => 'show',
            ],
            false,
            null,
            true
        );
    }

    /**
     * return parameters saved during the configuration
     *
     * @return array parameters saved
     */
    public function getParams()
    {
        $params = ['CHECKBOX_ACTIVATE', 'PRIMARY_COLOR_CARTDROPDOWN', 'CHECKBOX_BLACKPRICE', 'CHECKBOX_MOBILE', 'CHECKBOX_VIEW_CART', 'CHECKBOX_CHECKOUT_NOW'];

        return Configuration::getMultiple($params);
    }

    public function saveForm()
    {
        if (Configuration::updateValue('CHECKBOX_ACTIVATE', Tools::getValue('CHECKBOX_ACTIVATE')) &&
        Configuration::updateValue('PRIMARY_COLOR_CARTDROPDOWN', Tools::getValue('PRIMARY_COLOR_CARTDROPDOWN')) &&
        Configuration::updateValue('CHECKBOX_BLACKPRICE', Tools::getValue('CHECKBOX_BLACKPRICE')) &&
        Configuration::updateValue('CHECKBOX_MOBILE', Tools::getValue('CHECKBOX_MOBILE')) &&
        Configuration::updateValue('CHECKBOX_VIEW_CART', Tools::getValue('CHECKBOX_VIEW_CART')) &&
        Configuration::updateValue('CHECKBOX_CHECKOUT_NOW', Tools::getValue('CHECKBOX_CHECKOUT_NOW'))) {
            return true;
        } else {
            return false;
        }
    }

    public function hookDisplayHeader()
    {
        $load_js = [$this->js_path . 'pscartdropdown_header.js'];
        $this->context->controller->addJS($load_js);
        $load_css = [$this->css_path . 'pscartdropdown.css', $this->css_path . 'animate.css'];
        $this->context->controller->addCSS($load_css);
    }
}
