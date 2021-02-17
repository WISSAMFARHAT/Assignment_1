<?php

namespace App\Entity;

use App\Entity\Student;
use App\Entity\BaseEntity;
use App\Entity\StudentGrade;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\PreUpdate;
use Doctrine\ORM\Mapping\PrePersist;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Mapping\MappedSuperclass;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

  /*
  * @MappedSuperclass
   */
  abstract class BaseEntity
{
     /** @Column(type="datetime", nullable=true ) 
     */
     
     protected $modified;
     /** @Column(type="datetime", nullable=true)
      */
     protected $created;
    
     public function setCreated(\DateTimeInterface $date):self
     {
        $this->created = $date;
        return $this;
     }

     public function getCreated():?\DateTimeInterface
     {
         return $this->created;
     }

     
     public function setModified(\DateTimeInterface $date):self
     {
        $this->modified = $date;
        return $this;
     }

     public function getModified():?\DateTimeInterface
     {
         return $this->modified;
     }

/**
 * @ORM\PrePersist{}
*/
public function prePersist(LifecycleEventArgs $args)
{
   dump("wissam");
    $entity = $args->getObject();
    $args->getEntity()->setModified(new \DateTimeImmutable() );

}
/**
* @ORM\PreUpdate{}
*/
public function preUpdate(LifecycleEventArgs $args)
{
    $entity = $args->getObject();
    $args->getEntity()->setCreated((new \DateTimeImmutable()));
}

}

