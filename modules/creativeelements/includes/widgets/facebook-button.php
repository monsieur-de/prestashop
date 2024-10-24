<?php
/**
 * Creative Elements - Elementor based PageBuilder [in-stock]
 *
 * @author    WebshopWorks
 * @copyright 2019-2021 WebshopWorks.com
 * @license   In-stock license
 */

namespace CE;

defined('_PS_VERSION_') or die;

class WidgetFacebookButton extends WidgetPremiumBase
{
    public function getName()
    {
        return 'facebook-button';
    }

    public function getTitle()
    {
        return __('Facebook Button', 'elementor');
    }

    public function getIcon()
    {
        return 'eicon-facebook-like-box';
    }

    public function getDemoLink()
    {
        return 'https://pagebuilder.webshopworks.com/content/83-facebook-button';
    }
}
