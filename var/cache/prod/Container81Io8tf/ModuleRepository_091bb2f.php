<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder3558a = null;
    private $initializerb8073 = null;
    private static $publicProperties7eeae = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'getList', array(), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'getInstalledModules', array(), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'getMustBeConfiguredModules', array(), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'getUpgradableModules', array(), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'setActionUrls', array('collection' => $collection), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializerb8073 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder3558a) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder3558a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder3558a->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, '__get', ['name' => $name], $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        if (isset(self::$publicProperties7eeae[$name])) {
            return $this->valueHolder3558a->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3558a;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder3558a;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3558a;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder3558a;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, '__isset', array('name' => $name), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3558a;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder3558a;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, '__unset', array('name' => $name), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3558a;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder3558a;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, '__clone', array(), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        $this->valueHolder3558a = clone $this->valueHolder3558a;
    }
    public function __sleep()
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, '__sleep', array(), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return array('valueHolder3558a');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb8073 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb8073;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'initializeProxy', array(), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3558a;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3558a;
    }
}
