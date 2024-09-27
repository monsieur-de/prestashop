<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder768ae = null;
    private $initializer4effa = null;
    private static $publicProperties9f104 = [
        
    ];
    public function getConnection()
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'getConnection', array(), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'getMetadataFactory', array(), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'getExpressionBuilder', array(), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'beginTransaction', array(), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'getCache', array(), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->getCache();
    }
    public function transactional($func)
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'transactional', array('func' => $func), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'commit', array(), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->commit();
    }
    public function rollback()
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'rollback', array(), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'getClassMetadata', array('className' => $className), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'createQuery', array('dql' => $dql), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'createNamedQuery', array('name' => $name), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'createQueryBuilder', array(), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'flush', array('entity' => $entity), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'clear', array('entityName' => $entityName), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->clear($entityName);
    }
    public function close()
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'close', array(), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->close();
    }
    public function persist($entity)
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'persist', array('entity' => $entity), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'remove', array('entity' => $entity), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'refresh', array('entity' => $entity), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'detach', array('entity' => $entity), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'merge', array('entity' => $entity), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'contains', array('entity' => $entity), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'getEventManager', array(), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'getConfiguration', array(), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'isOpen', array(), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'getUnitOfWork', array(), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'getProxyFactory', array(), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'initializeObject', array('obj' => $obj), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'getFilters', array(), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'isFiltersStateClean', array(), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, 'hasFilters', array(), $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        return $this->valueHolder768ae->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer4effa = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder768ae) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder768ae = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder768ae->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer4effa && ($this->initializer4effa->__invoke($valueHolder768ae, $this, '__get', ['name' => $name], $this->initializer4effa) || 1) && $this->valueHolder768ae = $valueHolder768ae;
        if (isset(self::$publicProperties9f104[$name])) {
            return $this->valueHolder768ae->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
