<?php

namespace App\Entity;

use App\Entity\BaseEntity;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CourseRepository;

/**
 * @ORM\Entity(repositoryClass=CourseRepository::class)
 */
class Course extends BaseEntity
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Description;

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }
}
