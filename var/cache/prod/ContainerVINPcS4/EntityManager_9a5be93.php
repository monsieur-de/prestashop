<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder6fb5f = null;
    private $initializerff926 = null;
    private static $publicProperties19a83 = [
        
    ];
    public function getConnection()
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'getConnection', array(), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'getMetadataFactory', array(), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'getExpressionBuilder', array(), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'beginTransaction', array(), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'getCache', array(), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->getCache();
    }
    public function transactional($func)
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'transactional', array('func' => $func), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'wrapInTransaction', array('func' => $func), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'commit', array(), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->commit();
    }
    public function rollback()
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'rollback', array(), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'getClassMetadata', array('className' => $className), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'createQuery', array('dql' => $dql), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'createNamedQuery', array('name' => $name), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'createQueryBuilder', array(), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'flush', array('entity' => $entity), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'clear', array('entityName' => $entityName), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->clear($entityName);
    }
    public function close()
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'close', array(), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->close();
    }
    public function persist($entity)
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'persist', array('entity' => $entity), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'remove', array('entity' => $entity), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'refresh', array('entity' => $entity), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'detach', array('entity' => $entity), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'merge', array('entity' => $entity), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'getRepository', array('entityName' => $entityName), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'contains', array('entity' => $entity), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'getEventManager', array(), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'getConfiguration', array(), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'isOpen', array(), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'getUnitOfWork', array(), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'getProxyFactory', array(), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'initializeObject', array('obj' => $obj), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'getFilters', array(), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'isFiltersStateClean', array(), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, 'hasFilters', array(), $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        return $this->valueHolder6fb5f->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerff926 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder6fb5f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6fb5f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder6fb5f->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerff926 && ($this->initializerff926->__invoke($valueHolder6fb5f, $this, '__get', ['name' => $name], $this->initializerff926) || 1) && $this->valueHolder6fb5f = $valueHolder6fb5f;
        if (isset(self::$publicProperties19a83[$name])) {
            return $this->valueHolder6fb5f->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
