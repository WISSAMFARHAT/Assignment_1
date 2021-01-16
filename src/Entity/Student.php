<?php

namespace App\Entity;

use App\Entity\BaseEntity;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\StudentRepository;

/**
 * @ORM\Entity(repositoryClass=StudentRepository::class)
 */
class Student extends BaseEntity
{
    

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $First_Name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Last_Name;

    /**
     * @ORM\Column(type="date")
     */
    private $Date_of_Birth;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $image;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->First_Name;
    }

    public function setFirstName(string $First_Name): self
    {
        $this->First_Name = $First_Name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->Last_Name;
    }

    public function setLastName(string $Last_Name): self
    {
        $this->Last_Name = $Last_Name;

        return $this;
    }

    public function getDateOfBirth(): ?\DateTimeInterface
    {
        return $this->Date_of_Birth;
    }

    public function setDateOfBirth(\DateTimeInterface $Date_of_Birth): self
    {
        $this->Date_of_Birth = $Date_of_Birth;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }
   
    
}
