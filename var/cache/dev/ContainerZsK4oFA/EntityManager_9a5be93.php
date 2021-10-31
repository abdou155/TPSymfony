<?php

namespace ContainerZsK4oFA;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf87fa = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1a2ab = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese57af = [
        
    ];

    public function getConnection()
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'getConnection', array(), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'getMetadataFactory', array(), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'getExpressionBuilder', array(), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'beginTransaction', array(), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'getCache', array(), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'transactional', array('func' => $func), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'commit', array(), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->commit();
    }

    public function rollback()
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'rollback', array(), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'getClassMetadata', array('className' => $className), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'createQuery', array('dql' => $dql), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'createNamedQuery', array('name' => $name), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'createQueryBuilder', array(), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'flush', array('entity' => $entity), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'clear', array('entityName' => $entityName), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->clear($entityName);
    }

    public function close()
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'close', array(), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->close();
    }

    public function persist($entity)
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'persist', array('entity' => $entity), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'remove', array('entity' => $entity), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'refresh', array('entity' => $entity), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'detach', array('entity' => $entity), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'merge', array('entity' => $entity), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'contains', array('entity' => $entity), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'getEventManager', array(), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'getConfiguration', array(), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'isOpen', array(), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'getUnitOfWork', array(), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'getProxyFactory', array(), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'initializeObject', array('obj' => $obj), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'getFilters', array(), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'isFiltersStateClean', array(), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'hasFilters', array(), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return $this->valueHolderf87fa->hasFilters();
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

        $instance->initializer1a2ab = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf87fa) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf87fa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf87fa->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, '__get', ['name' => $name], $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        if (isset(self::$publicPropertiese57af[$name])) {
            return $this->valueHolderf87fa->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf87fa;

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

        $targetObject = $this->valueHolderf87fa;
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
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf87fa;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf87fa;
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
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, '__isset', array('name' => $name), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf87fa;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf87fa;
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
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, '__unset', array('name' => $name), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf87fa;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf87fa;
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
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, '__clone', array(), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        $this->valueHolderf87fa = clone $this->valueHolderf87fa;
    }

    public function __sleep()
    {
        $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, '__sleep', array(), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;

        return array('valueHolderf87fa');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1a2ab = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1a2ab;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1a2ab && ($this->initializer1a2ab->__invoke($valueHolderf87fa, $this, 'initializeProxy', array(), $this->initializer1a2ab) || 1) && $this->valueHolderf87fa = $valueHolderf87fa;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf87fa;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf87fa;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
