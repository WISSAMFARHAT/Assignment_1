<?php

namespace ContainerKpXr6bZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_Builder_OrmDatagridService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.admin.builder.orm_datagrid' shared service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Builder'.\DIRECTORY_SEPARATOR.'BuilderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Builder'.\DIRECTORY_SEPARATOR.'DatagridBuilderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'doctrine-orm-admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Builder'.\DIRECTORY_SEPARATOR.'DatagridBuilder.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Guesser'.\DIRECTORY_SEPARATOR.'TypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Guesser'.\DIRECTORY_SEPARATOR.'TypeGuesserChain.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'doctrine-orm-admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Guesser'.\DIRECTORY_SEPARATOR.'AbstractTypeGuesser.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'doctrine-orm-admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Guesser'.\DIRECTORY_SEPARATOR.'FilterTypeGuesser.php';

        return $container->privates['sonata.admin.builder.orm_datagrid'] = new \Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder(($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService')), ($container->services['sonata.admin.builder.filter.factory'] ?? $container->load('getSonata_Admin_Builder_Filter_FactoryService')), new \Sonata\AdminBundle\Guesser\TypeGuesserChain([0 => new \Sonata\DoctrineORMAdminBundle\Guesser\FilterTypeGuesser()]), true);
    }
}
