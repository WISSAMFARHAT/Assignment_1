<?php

namespace App\Entity;

use App\Entity\BaseEntity;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CourseRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=CourseRepository::class)
 * @ORM\HasLifecycleCallbacks()
 */
class Course extends BaseEntity 
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"api"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"api"})
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=Classe::class, inversedBy="courses")
     */
    private $classe;

    /**
     * @ORM\OneToMany(targetEntity=StudentGrade::class, mappedBy="course")
     */
    private $studentGrades;

    public function __toString() {
        return $this->name;
    }
    
    public function __construct()
    {
        $this->studentGrades = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getClasse(): ?classe
    {
        return $this->classe;
    }

    public function setClasse(?classe $classe): self
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * @return Collection|StudentGrade[]
     */
    public function getStudentGrades(): Collection
    {
        return $this->studentGrades;
    }

    public function addStudentGrade(StudentGrade $studentGrade): self
    {
        if (!$this->studentGrades->contains($studentGrade)) {
            $this->studentGrades[] = $studentGrade;
            $studentGrade->setCourse($this);
        }

        return $this;
    }

    public function removeStudentGrade(StudentGrade $studentGrade): self
    {
        if ($this->studentGrades->removeElement($studentGrade)) {
            // set the owning side to null (unless already changed)
            if ($studentGrade->getCourse() === $this) {
                $studentGrade->setCourse(null);
            }
        }

        return $this;
    }

}
