<?php

namespace ContainerKpXr6bZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_FormDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugCommand.php';

        $container->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($container->privates['form.registry'] ?? $container->load('getForm_RegistryService')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'Sonata\\Form\\Type', 4 => 'Sonata\\BlockBundle\\Form\\Type', 5 => 'Sonata\\AdminBundle\\Form\\Type', 6 => 'Sonata\\AdminBundle\\Form\\Type\\Filter'], [0 => 'App\\Form\\ClaseType', 1 => 'App\\Form\\CourseType', 2 => 'App\\Form\\StudentGradeType', 3 => 'App\\Form\\StudentType', 4 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 5 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 6 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 7 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType', 8 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 9 => 'Sonata\\Form\\Type\\ImmutableArrayType', 10 => 'Sonata\\Form\\Type\\BooleanType', 11 => 'Sonata\\Form\\Type\\CollectionType', 12 => 'Sonata\\Form\\Type\\DateRangeType', 13 => 'Sonata\\Form\\Type\\DateTimeRangeType', 14 => 'Sonata\\Form\\Type\\DatePickerType', 15 => 'Sonata\\Form\\Type\\DateTimePickerType', 16 => 'Sonata\\Form\\Type\\DateRangePickerType', 17 => 'Sonata\\Form\\Type\\DateTimeRangePickerType', 18 => 'Sonata\\Form\\Type\\EqualType', 19 => 'Sonata\\BlockBundle\\Form\\Type\\ServiceListType', 20 => 'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType', 21 => 'Sonata\\AdminBundle\\Form\\Type\\AdminType', 22 => 'Sonata\\AdminBundle\\Form\\Type\\ModelType', 23 => 'Sonata\\AdminBundle\\Form\\Type\\ModelListType', 24 => 'Sonata\\AdminBundle\\Form\\Type\\ModelReferenceType', 25 => 'Sonata\\AdminBundle\\Form\\Type\\ModelHiddenType', 26 => 'Sonata\\AdminBundle\\Form\\Type\\ModelAutocompleteType', 27 => 'Sonata\\AdminBundle\\Form\\Type\\CollectionType', 28 => 'Sonata\\AdminBundle\\Form\\Type\\ChoiceFieldMaskType', 29 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\NumberType', 30 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\ChoiceType', 31 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DefaultType', 32 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateType', 33 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateRangeType', 34 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeType', 35 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeRangeType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension', 8 => 'Sonata\\AdminBundle\\Form\\Extension\\Field\\Type\\FormTypeFieldExtension', 9 => 'Sonata\\AdminBundle\\Form\\Extension\\Field\\Type\\MopaCompatibilityTypeFieldExtension', 10 => 'Sonata\\AdminBundle\\Form\\Extension\\ChoiceTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($container->privates['debug.file_link_formatter'] ?? $container->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:form');

        return $instance;
    }
}
