<?php

namespace ContainerKpXr6bZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdmin_StudentsGradeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'admin.students_grade' autowired service.
     *
     * @return \App\Admin\StudentsGradeAdmin
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'TaggedAdminInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'AbstractTaggedAdmin.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'AccessRegistryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'FieldDescriptionRegistryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'LifecycleHookProviderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'MenuBuilderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'ParentAdminInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'UrlGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Templating'.\DIRECTORY_SEPARATOR.'MutableTemplateRegistryAwareInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'AdminInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-acl'.\DIRECTORY_SEPARATOR.'Model'.\DIRECTORY_SEPARATOR.'DomainObjectInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'AdminTreeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'AbstractAdmin.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'StudentsGradeAdmin.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Exporter'.\DIRECTORY_SEPARATOR.'DataSourceInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'doctrine-orm-admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Exporter'.\DIRECTORY_SEPARATOR.'DataSource.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'SecurityHandlerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'NoopSecurityHandler.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Translator'.\DIRECTORY_SEPARATOR.'LabelTranslatorStrategyInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Translator'.\DIRECTORY_SEPARATOR.'NativeLabelTranslatorStrategy.php';

        $container->factories['admin.students_grade'] = function () use ($container) {
            $instance = new \App\Admin\StudentsGradeAdmin('admin.students_grade', 'App\\Entity\\StudentsGrade', 'sonata.admin.controller.crud');

            $instance->setManagerType('orm');
            $instance->setModelManager(($container->services['sonata.admin.manager.orm'] ?? $container->load('getSonata_Admin_Manager_OrmService')));
            $instance->setDataSource(($container->privates['sonata.admin.data_source.orm'] ?? ($container->privates['sonata.admin.data_source.orm'] = new \Sonata\DoctrineORMAdminBundle\Exporter\DataSource())));
            $instance->setFormContractor(($container->privates['sonata.admin.builder.orm_form'] ?? $container->load('getSonata_Admin_Builder_OrmFormService')));
            $instance->setShowBuilder(($container->privates['sonata.admin.builder.orm_show'] ?? $container->load('getSonata_Admin_Builder_OrmShowService')));
            $instance->setListBuilder(($container->privates['sonata.admin.builder.orm_list'] ?? $container->load('getSonata_Admin_Builder_OrmListService')));
            $instance->setDatagridBuilder(($container->privates['sonata.admin.builder.orm_datagrid'] ?? $container->load('getSonata_Admin_Builder_OrmDatagridService')));
            $instance->setTranslator(($container->services['translator'] ?? $container->getTranslatorService()), false);
            $instance->setConfigurationPool(($container->services['sonata.admin.pool'] ?? $container->getSonata_Admin_PoolService()));
            $instance->setRouteGenerator(($container->services['sonata.admin.route.default_generator'] ?? $container->load('getSonata_Admin_Route_DefaultGeneratorService')));
            $instance->setSecurityHandler(($container->privates['sonata.admin.security.handler.noop'] ?? ($container->privates['sonata.admin.security.handler.noop'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler())));
            $instance->setMenuFactory(($container->services['knp_menu.factory'] ?? $container->load('getKnpMenu_FactoryService')));
            $instance->setRouteBuilder(($container->services['sonata.admin.route.path_info'] ?? $container->load('getSonata_Admin_Route_PathInfoService')));
            $instance->setLabelTranslatorStrategy(($container->services['sonata.admin.label.strategy.native'] ?? ($container->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())));
            $instance->setPagerType('default');
            $instance->setLabel('StudentsGrade');
            $instance->showMosaicButton(true);
            $instance->setTemplateRegistry(($container->services['admin.students_grade.template_registry'] ?? $container->load('getAdmin_StudentsGrade_TemplateRegistryService')));
            $instance->setSecurityInformation([]);
            $instance->initialize();
            $instance->addExtension(($container->services['sonata.admin.event.extension'] ?? $container->load('getSonata_Admin_Event_ExtensionService')));
            $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
            $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);

            return $instance;
        };

        return $container->factories['admin.students_grade']();
    }
}
