<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.design.theme.adapt_theme_to_rtl_languages' shared service.

return $this->services['form.type.design.theme.adapt_theme_to_rtl_languages'] = new \PrestaShopBundle\Form\Admin\Improve\Design\Theme\AdaptThemeToRTLLanguagesType(($this->services['prestashop.core.form.choice_provider.theme'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_ThemeService.php'))->getChoices());