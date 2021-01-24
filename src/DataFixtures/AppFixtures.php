<?php
namespace App\DataFixtures;

use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
            $user= new Users();
            $user->setId('201510387');
            $user->setPwd('123');
            $manager->persist($user);
            $manager->flush();
    }
}



?>