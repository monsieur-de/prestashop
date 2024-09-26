<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder6fb5f = null;
    private $initializerff926 = null;
    private static $publicProperties19a83 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'getList', array(), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'getInstalledModules', array(), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'getMustBeConfiguredModules', array(), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'getUpgradableModules', array(), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'setActionUrls', array('collection' => $collection), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializerff926 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder6fb5f) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder6fb5f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder6fb5f->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, '__get', ['name' => $name], $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        if (isset(self::$publicProperties19a83[$name])) {
            return $this->valueHolder6fb5f->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6fb5f;
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
        $targetObject = $this->valueHolder6fb5f;
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
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6fb5f;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder6fb5f;
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
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, '__isset', array('name' => $name), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6fb5f;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder6fb5f;
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
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, '__unset', array('name' => $name), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6fb5f;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder6fb5f;
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
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, '__clone', array(), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        $this->valueHolder6fb5f = clone $this->valueHolder6fb5f;
    }
    public function __sleep()
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, '__sleep', array(), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return array('valueHolder6fb5f');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerff926 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerff926;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'initializeProxy', array(), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6fb5f;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6fb5f;
    }
}
