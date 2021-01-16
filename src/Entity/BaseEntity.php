<?php

namespace App\Entity;

use App\Entity\Student;
use App\Entity\BaseEntity;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\BaseEntityRepository;
use Doctrine\ORM\Mapping\InheritanceType;
use Doctrine\ORM\Mapping\DiscriminatorMap;
use Doctrine\ORM\Mapping\MappedSuperclass;
use Doctrine\ORM\Mapping\DiscriminatorColumn;
use App\Entity\Clase;

/**
 * @ORM\Entity(repositoryClass=BaseEntityRepository::class)
 * @ORM\InheritanceType("JOINED")
 * @DiscriminatorColumn(name="classe", type="string")
 * @DiscriminatorMap({"Course" = "Course","Clase"="Clase","Student"="Student"})
 */
 abstract class BaseEntity
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $Created;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $Modified;

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModified(): ?\DateTimeInterface
    {
        return $this->Modified;
    }

    public function setModified(\DateTimeInterface $Modified): self
    {
        $this->Modified = $Modified;

        return $this;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->Created;
    }

    public function setCreated(\DateTimeInterface $Created): self
    {
        $this->Created = $Created;

        return $this;
    }
   

}
