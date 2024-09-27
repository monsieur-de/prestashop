<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder2542f = null;
    private $initializer42bcb = null;
    private static $publicProperties22ac6 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'getList', array(), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'getInstalledModules', array(), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'getMustBeConfiguredModules', array(), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'getUpgradableModules', array(), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'setActionUrls', array('collection' => $collection), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer42bcb = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder2542f) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder2542f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder2542f->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, '__get', ['name' => $name], $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        if (isset(self::$publicProperties22ac6[$name])) {
            return $this->valueHolder2542f->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2542f;
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
        $targetObject = $this->valueHolder2542f;
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
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2542f;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder2542f;
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
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, '__isset', array('name' => $name), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2542f;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder2542f;
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
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, '__unset', array('name' => $name), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2542f;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder2542f;
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
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, '__clone', array(), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        $this->valueHolder2542f = clone $this->valueHolder2542f;
    }
    public function __sleep()
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, '__sleep', array(), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return array('valueHolder2542f');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer42bcb = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer42bcb;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'initializeProxy', array(), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2542f;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2542f;
    }
}
