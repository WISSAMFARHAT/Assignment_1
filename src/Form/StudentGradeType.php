<?php

namespace App\Form;

use App\Entity\Course;
use App\Entity\Student;
use App\Entity\StudentGrade;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StudentGradeType extends AbstractType
{
    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $request = $this->requestStack->getCurrentRequest();
        $id=(int)$request->get("id");
         $builder
            ->add('student',EntityType::class, array(
                'class' => 'App\Entity\Student',
                'query_builder' => function (EntityRepository $er)use ( $id ) {
                    return $er->createQueryBuilder('u')
                    ->where('u.id = :type')
                    ->setParameter('type',$id);
                },
                'choice_label' => 'id' ))
            ->add('course',EntityType::class, array(
                'class' => 'App\Entity\Course',
                'choice_label' => 'name' ))
            ->add('grade')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => StudentGrade::class,
        ]);
    }
}
