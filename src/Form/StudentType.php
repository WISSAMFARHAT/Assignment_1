<?php

namespace App\Form;

use App\Entity\Student;
use Doctrine\DBAL\Types\ArrayType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class StudentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id',null,array('attr'=>array('style'=>'width:200px;')))
            ->add('pwd',PasswordType::class,array('attr'=>array('style'=>'width:200px;')))
            ->add('first_name',null,array('attr'=>array('style'=>'width:200px;')))
            ->add('last_name',null,array('attr'=>array('style'=>'width:200px;')))
            ->add('date_of_birth',DateType::class,['widget'=>'single_text','attr'=>['style'=>'width:200px']])
            ->add('image',FileType::class)
            ->add('grade',null,array('attr'=>array('style'=>'width:200px;')));
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Student::class,
        ]);
    }

    public function prePersist($object) { 
        $plainPassword = $object->getPwd();
        $container = $this->getConfigurationPool()->getContainer();
        $encoder = $container->get('security.password_encoder');
        $encoded = $encoder->encodePassword($object, $plainPassword);
    
        $object->setPassword($encoded);
    }
}
