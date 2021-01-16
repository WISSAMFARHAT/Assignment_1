<?php

declare(strict_types=1);

namespace App\Admin;

use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class StudentAdmin extends AbstractAdmin
{

    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            ->add('id')
            ->add('First_Name')
            ->add('Last_Name')
            ;
    }

    protected function configureListFields(ListMapper $listMapper): void
    {
        
        $listMapper
            ->add('id')
            ->add('First_Name')
            ->add('Last_Name')
            ->add('Date_of_Birth')
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
            ->add('First_Name')
            ->add('Last_Name')
            ->add('Date_of_Birth')
            ;
    }

    protected function configureShowFields(ShowMapper $showMapper): void
    {
        $showMapper
            ->add('id')
            ->add('First_Name')
            ->add('Last_Name')
            ->add('Date_of_Birth')
            ->add('image')
            ;
    }
}
