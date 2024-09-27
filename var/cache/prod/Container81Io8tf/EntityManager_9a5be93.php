<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder3558a = null;
    private $initializerb8073 = null;
    private static $publicProperties7eeae = [
        
    ];
    public function getConnection()
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'getConnection', array(), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'getMetadataFactory', array(), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'getExpressionBuilder', array(), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'beginTransaction', array(), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'getCache', array(), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->getCache();
    }
    public function transactional($func)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'transactional', array('func' => $func), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'commit', array(), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->commit();
    }
    public function rollback()
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'rollback', array(), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'getClassMetadata', array('className' => $className), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'createQuery', array('dql' => $dql), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'createNamedQuery', array('name' => $name), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'createQueryBuilder', array(), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'flush', array('entity' => $entity), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'clear', array('entityName' => $entityName), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->clear($entityName);
    }
    public function close()
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'close', array(), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->close();
    }
    public function persist($entity)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'persist', array('entity' => $entity), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'remove', array('entity' => $entity), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'refresh', array('entity' => $entity), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'detach', array('entity' => $entity), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'merge', array('entity' => $entity), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'contains', array('entity' => $entity), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'getEventManager', array(), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'getConfiguration', array(), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'isOpen', array(), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'getUnitOfWork', array(), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'getProxyFactory', array(), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'initializeObject', array('obj' => $obj), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'getFilters', array(), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'isFiltersStateClean', array(), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, 'hasFilters', array(), $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        return $this->valueHolder3558a->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerb8073 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder3558a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3558a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder3558a->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerb8073 && ($this->initializerb8073->__invoke($valueHolder3558a, $this, '__get', ['name' => $name], $this->initializerb8073) || 1) && $this->valueHolder3558a = $valueHolder3558a;
        if (isset(self::$publicProperties7eeae[$name])) {
            return $this->valueHolder3558a->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
