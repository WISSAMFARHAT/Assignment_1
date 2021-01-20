<?php

namespace ContainerKpXr6bZ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder309f2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer78b0c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties895e6 = [
        
    ];

    public function getConnection()
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'getConnection', array(), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'getMetadataFactory', array(), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'getExpressionBuilder', array(), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'beginTransaction', array(), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'getCache', array(), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->getCache();
    }

    public function transactional($func)
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'transactional', array('func' => $func), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->transactional($func);
    }

    public function commit()
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'commit', array(), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->commit();
    }

    public function rollback()
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'rollback', array(), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'getClassMetadata', array('className' => $className), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'createQuery', array('dql' => $dql), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'createNamedQuery', array('name' => $name), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'createQueryBuilder', array(), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'flush', array('entity' => $entity), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'clear', array('entityName' => $entityName), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->clear($entityName);
    }

    public function close()
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'close', array(), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->close();
    }

    public function persist($entity)
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'persist', array('entity' => $entity), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'remove', array('entity' => $entity), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'refresh', array('entity' => $entity), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'detach', array('entity' => $entity), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'merge', array('entity' => $entity), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'getRepository', array('entityName' => $entityName), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'contains', array('entity' => $entity), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'getEventManager', array(), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'getConfiguration', array(), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'isOpen', array(), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'getUnitOfWork', array(), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'getProxyFactory', array(), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'initializeObject', array('obj' => $obj), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'getFilters', array(), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'isFiltersStateClean', array(), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'hasFilters', array(), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return $this->valueHolder309f2->hasFilters();
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

        $instance->initializer78b0c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder309f2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder309f2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder309f2->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, '__get', ['name' => $name], $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        if (isset(self::$publicProperties895e6[$name])) {
            return $this->valueHolder309f2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder309f2;

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

        $targetObject = $this->valueHolder309f2;
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
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder309f2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder309f2;
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
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, '__isset', array('name' => $name), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder309f2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder309f2;
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
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, '__unset', array('name' => $name), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder309f2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder309f2;
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
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, '__clone', array(), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        $this->valueHolder309f2 = clone $this->valueHolder309f2;
    }

    public function __sleep()
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, '__sleep', array(), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        return array('valueHolder309f2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer78b0c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer78b0c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'initializeProxy', array(), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder309f2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder309f2;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
