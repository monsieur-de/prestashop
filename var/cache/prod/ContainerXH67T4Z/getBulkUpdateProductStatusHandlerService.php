<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Product\CommandHandler\BulkUpdateProductStatusHandler' shared autowired service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\CommandHandler\\BulkUpdateProductStatusHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\CommandHandler\BulkUpdateProductStatusHandler(($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $this->load('getProductRepository4Service.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Update\\ProductIndexationUpdater'] ?? $this->load('getProductIndexationUpdaterService.php')));
