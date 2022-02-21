<?php

namespace ContainerUMfSFak;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfd23a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3aa41 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd3c2e = [
        
    ];

    public function getConnection()
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'getConnection', array(), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'getMetadataFactory', array(), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'getExpressionBuilder', array(), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'beginTransaction', array(), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'getCache', array(), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'transactional', array('func' => $func), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'commit', array(), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->commit();
    }

    public function rollback()
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'rollback', array(), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'getClassMetadata', array('className' => $className), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'createQuery', array('dql' => $dql), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'createNamedQuery', array('name' => $name), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'createQueryBuilder', array(), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'flush', array('entity' => $entity), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'clear', array('entityName' => $entityName), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->clear($entityName);
    }

    public function close()
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'close', array(), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->close();
    }

    public function persist($entity)
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'persist', array('entity' => $entity), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'remove', array('entity' => $entity), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'refresh', array('entity' => $entity), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'detach', array('entity' => $entity), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'merge', array('entity' => $entity), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'contains', array('entity' => $entity), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'getEventManager', array(), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'getConfiguration', array(), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'isOpen', array(), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'getUnitOfWork', array(), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'getProxyFactory', array(), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'initializeObject', array('obj' => $obj), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'getFilters', array(), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'isFiltersStateClean', array(), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'hasFilters', array(), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return $this->valueHolderfd23a->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer3aa41 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfd23a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfd23a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfd23a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, '__get', ['name' => $name], $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        if (isset(self::$publicPropertiesd3c2e[$name])) {
            return $this->valueHolderfd23a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd23a;

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

        $targetObject = $this->valueHolderfd23a;
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
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd23a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfd23a;
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
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, '__isset', array('name' => $name), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd23a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfd23a;
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
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, '__unset', array('name' => $name), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd23a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfd23a;
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
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, '__clone', array(), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        $this->valueHolderfd23a = clone $this->valueHolderfd23a;
    }

    public function __sleep()
    {
        $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, '__sleep', array(), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;

        return array('valueHolderfd23a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3aa41 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3aa41;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3aa41 && ($this->initializer3aa41->__invoke($valueHolderfd23a, $this, 'initializeProxy', array(), $this->initializer3aa41) || 1) && $this->valueHolderfd23a = $valueHolderfd23a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfd23a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfd23a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
