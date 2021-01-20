<?php

namespace ContainerO51M8PF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_AdminExporterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sonata.admin.admin_exporter' shared service.
     *
     * @return \Sonata\AdminBundle\Bridge\Exporter\AdminExporter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bridge'.\DIRECTORY_SEPARATOR.'Exporter'.\DIRECTORY_SEPARATOR.'AdminExporter.php';

        return $container->services['sonata.admin.admin_exporter'] = new \Sonata\AdminBundle\Bridge\Exporter\AdminExporter(($container->services['sonata.exporter.exporter'] ?? $container->load('getSonata_Exporter_ExporterService')));
    }
}
