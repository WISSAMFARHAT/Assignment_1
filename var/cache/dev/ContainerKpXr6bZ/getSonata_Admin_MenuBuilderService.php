<?php

namespace ContainerKpXr6bZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_MenuBuilderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sonata.admin.menu_builder' shared service.
     *
     * @return \Sonata\AdminBundle\Menu\MenuBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Menu'.\DIRECTORY_SEPARATOR.'MenuBuilder.php';

        return $container->services['sonata.admin.menu_builder'] = new \Sonata\AdminBundle\Menu\MenuBuilder(($container->services['sonata.admin.pool'] ?? $container->getSonata_Admin_PoolService()), ($container->services['knp_menu.factory'] ?? $container->load('getKnpMenu_FactoryService')), ($container->privates['knp_menu.menu_provider.chain'] ?? $container->getKnpMenu_MenuProvider_ChainService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
