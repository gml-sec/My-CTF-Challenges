<?php

namespace ContainerZZWZ60Z;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderbf991 = null;
    private $initializer68243 = null;
    private static $publicProperties0a7d2 = [
        
    ];
    public function getConnection()
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'getConnection', array(), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'getMetadataFactory', array(), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'getExpressionBuilder', array(), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'beginTransaction', array(), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'getCache', array(), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->getCache();
    }
    public function transactional($func)
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'transactional', array('func' => $func), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'wrapInTransaction', array('func' => $func), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'commit', array(), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->commit();
    }
    public function rollback()
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'rollback', array(), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'getClassMetadata', array('className' => $className), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'createQuery', array('dql' => $dql), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'createNamedQuery', array('name' => $name), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'createQueryBuilder', array(), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'flush', array('entity' => $entity), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'clear', array('entityName' => $entityName), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->clear($entityName);
    }
    public function close()
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'close', array(), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->close();
    }
    public function persist($entity)
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'persist', array('entity' => $entity), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'remove', array('entity' => $entity), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'refresh', array('entity' => $entity), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'detach', array('entity' => $entity), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'merge', array('entity' => $entity), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'getRepository', array('entityName' => $entityName), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'contains', array('entity' => $entity), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'getEventManager', array(), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'getConfiguration', array(), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'isOpen', array(), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'getUnitOfWork', array(), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'getProxyFactory', array(), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'initializeObject', array('obj' => $obj), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'getFilters', array(), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'isFiltersStateClean', array(), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'hasFilters', array(), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return $this->valueHolderbf991->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer68243 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderbf991) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbf991 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderbf991->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, '__get', ['name' => $name], $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        if (isset(self::$publicProperties0a7d2[$name])) {
            return $this->valueHolderbf991->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf991;
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
        $targetObject = $this->valueHolderbf991;
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
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf991;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderbf991;
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
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, '__isset', array('name' => $name), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf991;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderbf991;
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
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, '__unset', array('name' => $name), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf991;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderbf991;
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
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, '__clone', array(), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        $this->valueHolderbf991 = clone $this->valueHolderbf991;
    }
    public function __sleep()
    {
        $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, '__sleep', array(), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
        return array('valueHolderbf991');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer68243 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer68243;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer68243 && ($this->initializer68243->__invoke($valueHolderbf991, $this, 'initializeProxy', array(), $this->initializer68243) || 1) && $this->valueHolderbf991 = $valueHolderbf991;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbf991;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbf991;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
