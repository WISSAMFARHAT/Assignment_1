<?php

namespace App\Entity;

use DateTime;
use App\Entity\BaseEntity;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ClaseRepository;
use Doctrine\ORM\Mapping\PrePersist;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;

/**
 * @ORM\Entity(repositoryClass=ClaseRepository::class)
 */
class Clase extends BaseEntity
{
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Section;


    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getSection(): ?string
    {
        return $this->Section;
    }

    public function setSection(string $Section): self
    {
        $this->Section = $Section;

        return $this;
    }


}
