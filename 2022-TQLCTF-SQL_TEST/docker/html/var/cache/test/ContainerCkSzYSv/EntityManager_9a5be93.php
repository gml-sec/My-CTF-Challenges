<?php

namespace ContainerCkSzYSv;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldere006a = null;
    private $initializera73bb = null;
    private static $publicPropertiescace7 = [
        
    ];
    public function getConnection()
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'getConnection', array(), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'getMetadataFactory', array(), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'getExpressionBuilder', array(), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'beginTransaction', array(), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->beginTransaction();
    }
    public function getCache()
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'getCache', array(), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->getCache();
    }
    public function transactional($func)
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'transactional', array('func' => $func), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'wrapInTransaction', array('func' => $func), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'commit', array(), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->commit();
    }
    public function rollback()
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'rollback', array(), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'getClassMetadata', array('className' => $className), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'createQuery', array('dql' => $dql), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'createNamedQuery', array('name' => $name), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'createQueryBuilder', array(), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'flush', array('entity' => $entity), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'clear', array('entityName' => $entityName), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->clear($entityName);
    }
    public function close()
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'close', array(), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->close();
    }
    public function persist($entity)
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'persist', array('entity' => $entity), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'remove', array('entity' => $entity), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'refresh', array('entity' => $entity), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'detach', array('entity' => $entity), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'merge', array('entity' => $entity), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'getRepository', array('entityName' => $entityName), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'contains', array('entity' => $entity), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'getEventManager', array(), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'getConfiguration', array(), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'isOpen', array(), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'getUnitOfWork', array(), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'getProxyFactory', array(), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'initializeObject', array('obj' => $obj), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'getFilters', array(), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'isFiltersStateClean', array(), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'hasFilters', array(), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return $this->valueHoldere006a->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializera73bb = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldere006a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere006a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldere006a->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, '__get', ['name' => $name], $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        if (isset(self::$publicPropertiescace7[$name])) {
            return $this->valueHoldere006a->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere006a;
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
        $targetObject = $this->valueHoldere006a;
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
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere006a;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldere006a;
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
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, '__isset', array('name' => $name), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere006a;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldere006a;
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
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, '__unset', array('name' => $name), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere006a;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldere006a;
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
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, '__clone', array(), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        $this->valueHoldere006a = clone $this->valueHoldere006a;
    }
    public function __sleep()
    {
        $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, '__sleep', array(), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
        return array('valueHoldere006a');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera73bb = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera73bb;
    }
    public function initializeProxy() : bool
    {
        return $this->initializera73bb && ($this->initializera73bb->__invoke($valueHoldere006a, $this, 'initializeProxy', array(), $this->initializera73bb) || 1) && $this->valueHoldere006a = $valueHoldere006a;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere006a;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere006a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
