<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsEventbus\Repository\IncrementalSyncRepository' shared service.

return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\IncrementalSyncRepository'] = new \PrestaShop\Module\PsEventbus\Repository\IncrementalSyncRepository(($this->services['ps_eventbus.context'] ?? $this->load('getPsEventbus_ContextService.php')), ($this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler'] ?? $this->load('getErrorHandler3Service.php')));
