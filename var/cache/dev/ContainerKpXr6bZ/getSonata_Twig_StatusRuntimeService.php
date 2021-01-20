<?php

namespace ContainerKpXr6bZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Twig_StatusRuntimeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.twig.status_runtime' shared service.
     *
     * @return \Sonata\Twig\Extension\StatusRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'twig-extensions'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'StatusRuntime.php';

        $container->privates['sonata.twig.status_runtime'] = $instance = new \Sonata\Twig\Extension\StatusRuntime();

        $instance->addStatusService(($container->services['sonata.twig.flashmessage.manager'] ?? $container->load('getSonata_Twig_Flashmessage_ManagerService')));

        return $instance;
    }
}
