<?php
namespace App\Subscript;


use DateTime;
use App\Entity\Course;
use Doctrine\ORM\Events;
use App\Entity\PreUpdate;
use App\Entity\BaseEntity;
use App\Entity\PostUpdate;
use App\Entity\PrePersist;
use App\Entity\PostPersist;
use Doctrine\Common\EventSubscriber;
use App\Repository\BaseEntityRepository;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class subscriber extends AbstractController implements EventSubscriber
{
public  function getSubscribedEvents()
{

    return [
        Events::prePersist,
        Events::preUpdate
    ];
}
public function preUpdate(LifecycleEventArgs $args){

    $args->getEntity()->setModified(new \DateTimeImmutable() );
}

public function prePersist(LifecycleEventArgs $args)
{
    if(method_exists($this, 'setCreated')){
    $args->getEntity()->setCreated((new \DateTimeImmutable()));
    }

}


}
?>