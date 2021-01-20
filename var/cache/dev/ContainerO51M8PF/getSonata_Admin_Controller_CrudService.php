<?php

namespace ContainerO51M8PF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_Controller_CrudService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sonata.admin.controller.crud' shared service.
     *
     * @return \Sonata\AdminBundle\Controller\CRUDController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'CRUDController.php';

        $container->services['sonata.admin.controller.crud'] = $instance = new \Sonata\AdminBundle\Controller\CRUDController();

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'form.factory' => ['services', '.container.private.form.factory', 'get_Container_Private_Form_FactoryService', true],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'logger' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.csrf.token_manager' => ['services', '.container.private.security.csrf.token_manager', 'get_Container_Private_Security_Csrf_TokenManagerService', true],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'session' => ['services', 'session', 'getSessionService', true],
            'sonata.admin.audit.manager' => ['services', 'sonata.admin.audit.manager', 'getSonata_Admin_Audit_ManagerService', true],
            'sonata.admin.breadcrumbs_builder' => ['services', 'sonata.admin.breadcrumbs_builder', 'getSonata_Admin_BreadcrumbsBuilderService', true],
            'sonata.admin.object.manipulator.acl.admin' => ['services', 'sonata.admin.object.manipulator.acl.admin', 'getSonata_Admin_Object_Manipulator_Acl_AdminService', true],
            'sonata.admin.pool' => ['services', 'sonata.admin.pool', 'getSonata_Admin_PoolService', false],
            'sonata.exporter.exporter' => ['services', 'sonata.exporter.exporter', 'getSonata_Exporter_ExporterService', true],
            'translator' => ['services', 'translator', 'getTranslatorService', false],
            'twig' => ['services', '.container.private.twig', 'get_Container_Private_TwigService', false],
        ], [
            'doctrine' => '?',
            'form.factory' => '?',
            'http_kernel' => '?',
            'logger' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'security.authorization_checker' => '?',
            'security.csrf.token_manager' => '?',
            'security.token_storage' => '?',
            'serializer' => '?',
            'session' => '?',
            'sonata.admin.audit.manager' => '?',
            'sonata.admin.breadcrumbs_builder' => '?',
            'sonata.admin.object.manipulator.acl.admin' => '?',
            'sonata.admin.pool' => '?',
            'sonata.exporter.exporter' => '?',
            'translator' => '?',
            'twig' => '?',
        ]))->withContext('sonata.admin.controller.crud', $container));

        return $instance;
    }
}
