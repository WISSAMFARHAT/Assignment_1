<?php

namespace ContainerKpXr6bZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Form_Type_BooleanService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.form.type.boolean' shared service.
     *
     * @return \Sonata\Form\Type\BooleanType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'form-extensions'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'BooleanType.php';

        return $container->privates['sonata.form.type.boolean'] = new \Sonata\Form\Type\BooleanType();
    }
}
