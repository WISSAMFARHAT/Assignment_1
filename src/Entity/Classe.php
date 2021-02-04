<?php

namespace App\Entity;

use App\Entity\BaseEntity;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ClasseRepository;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass=ClasseRepository::class)
 * @ORM\HasLifecycleCallbacks()
 */
class Classe extends BaseEntity
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $section;

    /**
     * @ORM\OneToMany(targetEntity=Course::class, mappedBy="classe")
     */
    private $courses;

    public function __construct()
    {
        $this->courses = new ArrayCollection();
    }
    public function __toString() {
        return $this->name;
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSection(): ?string
    {
        return $this->section;
    }

    public function setSection(string $section): self
    {
        $this->section = $section;

        return $this;
    }

    /**
     * @return Collection|Course[]
     */
    public function getCourses(): Collection
    {
        return $this->courses;
    }

    public function addCourse(Course $course): self
    {
        if (!$this->courses->contains($course)) {
            $this->courses[] = $course;
            $course->setClasse($this);
        }

        return $this;
    }

    public function removeCourse(Course $course): self
    {
        if ($this->courses->removeElement($course)) {
            // set the owning side to null (unless already changed)
            if ($course->getClasse() === $this) {
                $course->setClasse(null);
            }
        }

        return $this;
    }

    /**
 * @ORM\PrePersist{}
 */
public function prePersist(LifecycleEventArgs $args)
{
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
