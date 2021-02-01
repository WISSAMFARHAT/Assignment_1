<?php
namespace App\DataFixtures;

use App\Entity\Student;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
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
            $student->setRoles(["ROLE_ADMIN"]);

            $manager->persist($student);
            $manager->flush();
    }
}



?>