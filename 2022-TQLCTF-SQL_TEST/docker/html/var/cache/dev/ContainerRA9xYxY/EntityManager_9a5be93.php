<?php

namespace ContainerRA9xYxY;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf103c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8af8f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6e9cb = [
        
    ];

    public function getConnection()
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'getConnection', array(), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'getMetadataFactory', array(), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'getExpressionBuilder', array(), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'beginTransaction', array(), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'getCache', array(), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'transactional', array('func' => $func), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'commit', array(), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->commit();
    }

    public function rollback()
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'rollback', array(), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'getClassMetadata', array('className' => $className), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'createQuery', array('dql' => $dql), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'createNamedQuery', array('name' => $name), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'createQueryBuilder', array(), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'flush', array('entity' => $entity), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'clear', array('entityName' => $entityName), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->clear($entityName);
    }

    public function close()
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'close', array(), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->close();
    }

    public function persist($entity)
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'persist', array('entity' => $entity), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'remove', array('entity' => $entity), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'refresh', array('entity' => $entity), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'detach', array('entity' => $entity), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'merge', array('entity' => $entity), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'contains', array('entity' => $entity), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'getEventManager', array(), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'getConfiguration', array(), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'isOpen', array(), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'getUnitOfWork', array(), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'getProxyFactory', array(), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'initializeObject', array('obj' => $obj), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'getFilters', array(), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'isFiltersStateClean', array(), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'hasFilters', array(), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return $this->valueHolderf103c->hasFilters();
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

        $instance->initializer8af8f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf103c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf103c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf103c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, '__get', ['name' => $name], $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        if (isset(self::$publicProperties6e9cb[$name])) {
            return $this->valueHolderf103c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf103c;

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

        $targetObject = $this->valueHolderf103c;
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
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf103c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf103c;
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
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, '__isset', array('name' => $name), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf103c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf103c;
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
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, '__unset', array('name' => $name), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf103c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf103c;
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
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, '__clone', array(), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        $this->valueHolderf103c = clone $this->valueHolderf103c;
    }

    public function __sleep()
    {
        $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, '__sleep', array(), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;

        return array('valueHolderf103c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8af8f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8af8f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8af8f && ($this->initializer8af8f->__invoke($valueHolderf103c, $this, 'initializeProxy', array(), $this->initializer8af8f) || 1) && $this->valueHolderf103c = $valueHolderf103c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf103c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf103c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
