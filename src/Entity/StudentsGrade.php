<?php

namespace App\Entity;

use App\Repository\StudentsGradeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StudentsGradeRepository::class)
 */
class StudentsGrade
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $student_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Clase_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Course_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Grade;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStudentId(): ?int
    {
        return $this->student_id;
    }

    public function setStudentId(int $student_id): self
    {
        $this->student_id = $student_id;

        return $this;
    }

    public function getClaseId(): ?int
    {
        return $this->Clase_id;
    }

    public function setClaseId(int $Clase_id): self
    {
        $this->Clase_id = $Clase_id;

        return $this;
    }

    public function getCourseId(): ?int
    {
        return $this->Course_id;
    }

    public function setCourseId(int $Course_id): self
    {
        $this->Course_id = $Course_id;

        return $this;
    }

    public function getGrade(): ?int
    {
        return $this->Grade;
    }

    public function setGrade(?int $Grade): self
    {
        $this->Grade = $Grade;

        return $this;
    }
}
