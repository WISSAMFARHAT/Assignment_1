<?php

namespace ContainerO51M8PF;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, int $limit = 10, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        if ($this->valueHolder309f2 === $returnValue = $this->valueHolder309f2->paginate($target, $page, $limit, $options)) {
            $returnValue = $this;
        }

        return $returnValue;
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

        $instance->initializer78b0c = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder309f2) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder309f2 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, '__get', ['name' => $name], $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        if (isset(self::$publicProperties895e6[$name])) {
            return $this->valueHolder309f2->$name;
        }

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

    public function __set($name, $value)
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        $targetObject = $this->valueHolder309f2;

        $targetObject->$name = $value;

        return $targetObject->$name;
    }

    public function __isset($name)
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, '__isset', array('name' => $name), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        $targetObject = $this->valueHolder309f2;

        return isset($targetObject->$name);
    }

    public function __unset($name)
    {
        $this->initializer78b0c && ($this->initializer78b0c->__invoke($valueHolder309f2, $this, '__unset', array('name' => $name), $this->initializer78b0c) || 1) && $this->valueHolder309f2 = $valueHolder309f2;

        $targetObject = $this->valueHolder309f2;

        unset($targetObject->$name);

return;
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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
