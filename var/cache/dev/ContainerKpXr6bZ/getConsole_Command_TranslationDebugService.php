<?php

namespace ContainerKpXr6bZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.translation_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'TranslationDebugCommand.php';

        $container->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($container->services['translator'] ?? $container->getTranslatorService()), ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), ($container->privates['translation.extractor'] ?? $container->load('getTranslation_ExtractorService')), (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-menu'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Menu/Resources/views'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Email'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Form'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'StudentAdmin.php'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'ClaseAdmin.php'), 5 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'CourseAdmin.php'), 6 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'StudentsGradeAdmin.php'), 7 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'BaseEntityAdmin.php'), 8 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'TranslationDebugCommand.php'), 9 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'ColorType.php'), 10 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'TransformationFailureExtension.php'), 11 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'FormTypeValidatorExtension.php'), 12 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'UploadValidatorExtension.php'), 13 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Csrf'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'FormTypeCsrfExtension.php'), 14 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ValidatorBuilder.php'), 15 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'TranslationsCacheWarmer.php'), 16 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'TranslationDataCollector.php'), 17 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'form-extensions'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'DateRangeType.php'), 18 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'form-extensions'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'DateTimeRangeType.php'), 19 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'form-extensions'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'DatePickerType.php'), 20 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'form-extensions'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'DateTimePickerType.php'), 21 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'form-extensions'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'DateRangePickerType.php'), 22 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'form-extensions'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'DateTimeRangePickerType.php'), 23 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'form-extensions'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'EqualType.php'), 24 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'CRUDController.php'), 25 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'SonataAdminExtension.php'), 26 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'FileType.php'), 27 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'TranslationExtension.php'), 28 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'FormExtension.php'), 29 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Processor.php')]);

        $instance->setName('debug:translation');

        return $instance;
    }
}
