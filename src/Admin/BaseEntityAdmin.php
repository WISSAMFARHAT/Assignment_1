<?php

declare(strict_types=1);

namespace App\Admin;

use App\Entity\BaseEntity;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Doctrine\ORM\Mapping\DiscriminatorColumn;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

final class BaseEntityAdmin extends AbstractAdmin
{


    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper
            ->add('id')
            ->add('Created')
            ->add('Modified');
    }

}
