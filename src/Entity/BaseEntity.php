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
use App\Entity\Classe;

/**
 * @ORM\Entity(repositoryClass=BaseEntityRepository::class)
 * @ORM\InheritanceType("JOINED")
 * @DiscriminatorColumn(name="classe", type="string")
 * @DiscriminatorMap({"Course" = "Course","Classe"="Classe","Student"="Student"})
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
     * @ORM\Column(type="datetime",nullable=true)
     */
    protected $created;

    /**
     * @ORM\Column(type="datetime",nullable=true)
     */
    protected $modified;

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModified(): ?\DateTimeInterface
    {
        return $this->modified;
    }

    public function setModified(\DateTimeInterface $modified): self
    {
        $this->modified = $modified;

        return $this;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(\DateTimeInterface $created): self
    {
        $this->created = $created;

        return $this;
    }
   

}
