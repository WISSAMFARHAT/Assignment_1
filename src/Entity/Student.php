<?php

namespace App\Entity;

use Serializable;
use App\Entity\BaseEntity;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\StudentRepository;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=StudentRepository::class)
 */
class Student implements UserInterface, \Serializable
{
    

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pwd;

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
     * @ORM\Column(type="json",nullable=true)
     */
    private $roles=[];


    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id=$id;
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

    
    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
       $roles=$this->roles;
       $roles[]='ROLE_USER';
       return array_unique($roles);
    }

    public function setRoles(array $roles):self
    {
        $this->roles=$roles;
        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->first_name;
    }
    public function getPassword(): ?string {
        return $this->pwd;
    }
    public function getSalt(){}
    public function eraseCredentials(){}
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
        ) = unserialize($string, ['allowed_classes' => false]);
    }
}
