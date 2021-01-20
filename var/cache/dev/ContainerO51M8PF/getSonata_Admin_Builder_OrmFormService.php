<?php

namespace ContainerO51M8PF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_Builder_OrmFormService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.admin.builder.orm_form' shared service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\FormContractor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Builder'.\DIRECTORY_SEPARATOR.'BuilderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Builder'.\DIRECTORY_SEPARATOR.'FormContractorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'doctrine-orm-admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Builder'.\DIRECTORY_SEPARATOR.'FormContractor.php';

        return $container->privates['sonata.admin.builder.orm_form'] = new \Sonata\DoctrineORMAdminBundle\Builder\FormContractor(($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService')));
    }
}
