<?php
namespace App\DataFixtures;

use App\Entity\Classe;
use App\Entity\Course;
use App\Entity\Student;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{

    private $encoder;
    public function __construct(UserPasswordEncoderInterface $encoder){
        $this->encoder=$encoder;
    }
    public function load(ObjectManager $manager)
    {
            $student= new Student();
            $student->setId('10');
            $student->setPwd(
                $this->encoder->encodePassword($student,'000')
            );
            $student->setFirstName('Admin');
            $student->setLastName('Admin');
            $student->setDateOfBirth(new \DateTime('1998-03-04'));
            $student->setRoles(["ROLE_ADMIN,ROLE_USER"]);
            $student->setGrade("0");
            $manager->persist($student);
            $manager->flush();

            for($i=1;$i<7;$i++){
            $classe=new Classe();
            $classe->setName("A2.".$i);
            $classe->setSection("S".$i);
            $manager->persist($classe);
            $manager->flush();
            
            
            $course= new Course();
            $course->setName("Course".$i);
            $course->setDescription("Description_".$i);
            $course->setClasse($classe);
            $manager->persist($course);
            $manager->flush();
            }

    }
}



?>