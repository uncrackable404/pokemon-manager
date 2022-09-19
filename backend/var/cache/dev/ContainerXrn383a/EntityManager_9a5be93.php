<?php

namespace ContainerXrn383a;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3a359 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7ac06 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0f5eb = [
        
    ];

    public function getConnection()
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'getConnection', array(), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'getMetadataFactory', array(), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'getExpressionBuilder', array(), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'beginTransaction', array(), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'getCache', array(), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'transactional', array('func' => $func), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'commit', array(), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->commit();
    }

    public function rollback()
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'rollback', array(), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'getClassMetadata', array('className' => $className), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'createQuery', array('dql' => $dql), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'createNamedQuery', array('name' => $name), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'createQueryBuilder', array(), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'flush', array('entity' => $entity), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'clear', array('entityName' => $entityName), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->clear($entityName);
    }

    public function close()
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'close', array(), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->close();
    }

    public function persist($entity)
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'persist', array('entity' => $entity), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'remove', array('entity' => $entity), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'refresh', array('entity' => $entity), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'detach', array('entity' => $entity), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'merge', array('entity' => $entity), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'contains', array('entity' => $entity), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'getEventManager', array(), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'getConfiguration', array(), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'isOpen', array(), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'getUnitOfWork', array(), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'getProxyFactory', array(), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'initializeObject', array('obj' => $obj), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'getFilters', array(), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'isFiltersStateClean', array(), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'hasFilters', array(), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return $this->valueHolder3a359->hasFilters();
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

        $instance->initializer7ac06 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder3a359) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3a359 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3a359->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, '__get', ['name' => $name], $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        if (isset(self::$publicProperties0f5eb[$name])) {
            return $this->valueHolder3a359->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3a359;

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

        $targetObject = $this->valueHolder3a359;
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
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3a359;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3a359;
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
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, '__isset', array('name' => $name), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3a359;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3a359;
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
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, '__unset', array('name' => $name), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3a359;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3a359;
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
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, '__clone', array(), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        $this->valueHolder3a359 = clone $this->valueHolder3a359;
    }

    public function __sleep()
    {
        $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, '__sleep', array(), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;

        return array('valueHolder3a359');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7ac06 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7ac06;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7ac06 && ($this->initializer7ac06->__invoke($valueHolder3a359, $this, 'initializeProxy', array(), $this->initializer7ac06) || 1) && $this->valueHolder3a359 = $valueHolder3a359;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3a359;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3a359;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
