<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PrestashopCheckout\Presenter\Store\StorePresenter' shared service.

return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\StorePresenter'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\StorePresenter([0 => ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\ContextModule'] ?? $this->load('getContextModuleService.php')), 1 => ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\PaypalModule'] ?? $this->load('getPaypalModuleService.php')), 2 => ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\ConfigurationModule'] ?? $this->load('getConfigurationModuleService.php'))]);