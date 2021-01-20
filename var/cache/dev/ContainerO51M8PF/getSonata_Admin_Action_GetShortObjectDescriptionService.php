<?php

namespace ContainerO51M8PF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_Action_GetShortObjectDescriptionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sonata.admin.action.get_short_object_description' shared service.
     *
     * @return \Sonata\AdminBundle\Action\GetShortObjectDescriptionAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Action'.\DIRECTORY_SEPARATOR.'GetShortObjectDescriptionAction.php';

        return $container->services['sonata.admin.action.get_short_object_description'] = new \Sonata\AdminBundle\Action\GetShortObjectDescriptionAction(($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()), ($container->services['sonata.admin.pool'] ?? $container->getSonata_Admin_PoolService()));
    }
}
