<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder2542f = null;
    private $initializer42bcb = null;
    private static $publicProperties22ac6 = [
        
    ];
    public function getConnection()
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'getConnection', array(), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'getMetadataFactory', array(), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'getExpressionBuilder', array(), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'beginTransaction', array(), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'getCache', array(), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->getCache();
    }
    public function transactional($func)
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'transactional', array('func' => $func), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'commit', array(), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->commit();
    }
    public function rollback()
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'rollback', array(), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'getClassMetadata', array('className' => $className), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'createQuery', array('dql' => $dql), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'createNamedQuery', array('name' => $name), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'createQueryBuilder', array(), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'flush', array('entity' => $entity), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'clear', array('entityName' => $entityName), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->clear($entityName);
    }
    public function close()
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'close', array(), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->close();
    }
    public function persist($entity)
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'persist', array('entity' => $entity), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'remove', array('entity' => $entity), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'refresh', array('entity' => $entity), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'detach', array('entity' => $entity), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'merge', array('entity' => $entity), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'contains', array('entity' => $entity), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'getEventManager', array(), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'getConfiguration', array(), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'isOpen', array(), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'getUnitOfWork', array(), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'getProxyFactory', array(), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'initializeObject', array('obj' => $obj), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'getFilters', array(), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'isFiltersStateClean', array(), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, 'hasFilters', array(), $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        return $this->valueHolder2542f->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer42bcb = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder2542f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2542f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder2542f->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer42bcb && ($this->initializer42bcb->__invoke($valueHolder2542f, $this, '__get', ['name' => $name], $this->initializer42bcb) || 1) && $this->valueHolder2542f = $valueHolder2542f;
        if (isset(self::$publicProperties22ac6[$name])) {
            return $this->valueHolder2542f->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
