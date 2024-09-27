<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder768ae = null;
    private $initializer4effa = null;
    private static $publicProperties9f104 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'getList', array(), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'getInstalledModules', array(), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'getMustBeConfiguredModules', array(), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'getUpgradableModules', array(), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'setActionUrls', array('collection' => $collection), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer4effa = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder768ae) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder768ae = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder768ae->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, '__get', ['name' => $name], $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        if (isset(self::$publicProperties9f104[$name])) {
            return $this->valueHolder768ae->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder768ae;
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
        $targetObject = $this->valueHolder768ae;
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
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder768ae;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder768ae;
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
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, '__isset', array('name' => $name), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder768ae;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder768ae;
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
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, '__unset', array('name' => $name), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder768ae;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder768ae;
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
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, '__clone', array(), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        $this->valueHolder768ae = clone $this->valueHolder768ae;
    }
    public function __sleep()
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, '__sleep', array(), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return array('valueHolder768ae');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4effa = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4effa;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'initializeProxy', array(), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder768ae;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder768ae;
    }
}
