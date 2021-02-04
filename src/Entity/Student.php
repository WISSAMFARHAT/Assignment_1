<?php

namespace App\Entity;

use Serializable;
use App\Entity\BaseEntity;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\StudentRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @ORM\Entity(repositoryClass=StudentRepository::class)
 * @ORM\HasLifecycleCallbacks()
 */
class Student implements  UserInterface , \Serializable
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $grade;

    /**
     * @ORM\OneToMany(targetEntity=StudentGrade::class, mappedBy="student")
     */
    private $studentGrades;

    /**
     * @ORM\Column(type="string", length=255,unique=true)
     */
    private $first_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $last_name;

    /**
     * @ORM\Column(type="date")
     */
    private $date_of_birth;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pwd;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];


    

    public function __toString() {
        return ("".$this->id);
    }
    
    public function __construct()
    {
        $this->studentGrades = new ArrayCollection();
        
    }
   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id=$id;
        return $this;
    }

    public function getGrade(): ?int
    {
        return $this->grade;
    }

    public function setGrade(int $grade): self
    {
        $this->grade = $grade;

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
            $studentGrade->setStudent($this);
        }

        return $this;
    }

    public function removeStudentGrade(StudentGrade $studentGrade): self
    {
        if ($this->studentGrades->removeElement($studentGrade)) {
            // set the owning side to null (unless already changed)
            if ($studentGrade->getStudent() === $this) {
                $studentGrade->setStudent(null);
            }
        }

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getDateOfBirth(): ?\DateTimeInterface
    {
        return $this->date_of_birth;
    }

    public function setDateOfBirth(\DateTimeInterface $date_of_birth): self
    {
        $this->date_of_birth = $date_of_birth;

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

    public function getPwd(): ?string
    {
        return $this->pwd;
    }

    public function setPwd(string $pwd): self
    {
        $this->pwd = $pwd;

        return $this;
    }

    public function getRoles(): ?array
    {
        return $this->roles;
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getPassword()
    {
        return $this->pwd;
    }

    public function getSalt()
    {
    
    }

    public function getUsername()
    {
        return $this->first_name;
    }

    public function eraseCredentials()
    {
    }

    public function serialize()
    {
        return serialize([
            $this->id,
            $this->first_name,
            $this->last_name,
            $this->pwd,
            $this->roles
        ]);
    }

    public function unserialize($string){
        List(
            $this->id,
            $this->first_name,
            $this->last_name,
            $this->pwd,
            $this->roles
        )= unserialize($string,['allowed_classes'=>false]);
    }
    
    

}
