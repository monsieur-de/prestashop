<?php
/**
 * Creative Elements - Elementor based PageBuilder [in-stock]
 *
 * @author    WebshopWorks
 * @copyright 2019-2021 WebshopWorks.com
 * @license   In-stock license
 */
defined('_PS_VERSION_') or die;
class CMSCategory extends CMSCategoryCore
{
    /*
    * module: creativeelements
    * date: 2024-10-03 16:35:26
    * version: 1.4.10.4
    */
    const CE_OVERRIDE = true;
    /*
    * module: creativeelements
    * date: 2024-10-03 16:35:26
    * version: 1.4.10.4
    */
    public function __construct($id = null, $idLang = null)
    {
        parent::__construct($id, $idLang);
        $ctrl = Context::getContext()->controller;
        if ($ctrl instanceof CmsController && !CmsController::$initialized && !$this->active && Tools::getIsset('id_employee') && Tools::getIsset('adtoken')) {
            $tab = 'AdminCmsContent';
            if (Tools::getAdminToken($tab . (int) Tab::getIdFromClassName($tab) . (int) Tools::getValue('id_employee')) == Tools::getValue('adtoken')) {
                $this->active = 1;
            }
        }
    }
}
