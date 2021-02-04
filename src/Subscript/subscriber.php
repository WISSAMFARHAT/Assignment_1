<?php
namespace App\Subscript;


use DateTime;
use App\Entity\User;
use App\Entity\Course;
use App\Entity\Student;
use Doctrine\ORM\Events;
use App\Entity\PreUpdate;
use App\Entity\BaseEntity;
use App\Entity\PostUpdate;
use App\Entity\PrePersist;
use App\Entity\PostPersist;
use App\Entity\StudentsGrade;
use Doctrine\Common\EventSubscriber;
use App\Repository\BaseEntityRepository;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class subscriber extends AbstractController implements EventSubscriber
{
public  function getSubscribedEvents()
{

/*    return [
        Events::prePersist,
        Events::preUpdate
    ];
    */
}
public function preUpdate(LifecycleEventArgs $args){

    $entity = $args->getObject();
    if ($entity instanceof Student) {
        return;
    }
    if ($entity instanceof StudentsGrade) {
        return;
    }
    $args->getEntity()->setModified(new \DateTimeImmutable() );
}

public function prePersist(LifecycleEventArgs $args)
{
    $entity = $args->getObject();
    if ($entity instanceof Student) {
        return;
    }
    if ($entity instanceof StudentsGrade) {
        return;
    }
    $args->getEntity()->setCreated((new \DateTimeImmutable()));


}


}
?>