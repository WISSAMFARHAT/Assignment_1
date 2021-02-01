<?php

namespace App\Form;

use App\Entity\Student;
use Doctrine\DBAL\Types\ArrayType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class StudentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('id',null, array('attr' => array('style' => 'width: 200px;')))
            ->add('pwd',null, array('attr' => array('style' => 'width: 200px')))
            ->add('first_name',null, array('attr' => array('style' => 'width: 200px')))
            ->add('last_name',null,array('attr' => array('style' => 'width: 200px')))
            ->add('date_of_birth',DateType::Class,['widget' => 'single_text','attr' =>['style' => 'width: 200px;']])
            ->add('image',FileType::class);
                }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Student::class,
        ]);
    }
}
