<?php

declare(strict_types=1);

namespace App\Admin;

use App\Entity\Course;
use App\Entity\Student;
use Doctrine\ORM\EntityRepository;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Symfony\Component\HttpFoundation\Request;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

final class StudentGradeAdmin extends AbstractAdmin
{

    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            ->add('id')
            ->add('grade')
            ;
    }

    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper 
            ->add('student',EntityType::class, array(
                'class' => 'App\Entity\Student',
                'choice_label' => 'id'))
            ->add('course',EntityType::class, array(
                'class' => 'App\Entity\Course',
                'choice_label' => 'name' ))
            ->add('grade')
            ->add('_action', null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
            ]);
    }

    protected function configureFormFields(FormMapper $formMapper): void
    {
        $formMapper
            ->add('student',EntityType::class, array(
                'class' => 'App\Entity\Student',
                'choice_label' => 'id' ))
            ->add('course',EntityType::class, array(
                'class' => 'App\Entity\Course',
                'choice_label' => 'name' ))
            ->add('grade')
            ;
    }

    protected function configureShowFields(ShowMapper $showMapper): void
    {
        $showMapper
            ->add('id')
            ->add('student',EntityType::class, array(
                'class' => 'App\Entity\Student',
                'choice_label' => 'id'))
            ->add('course',EntityType::class, array(
                'class' => 'App\Entity\Course',
                'choice_label' => 'name' ))
            ->add('grade')
            ;
    }
}
