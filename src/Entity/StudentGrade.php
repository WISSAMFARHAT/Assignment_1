<?php

namespace App\Entity;

use App\Repository\StudentGradeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StudentGradeRepository::class)
 */
class StudentGrade
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
    private $grade;

    /**
     * @ORM\ManyToOne(targetEntity=Student::class, inversedBy="studentGrades")
     */
    private $student;

    /**
     * @ORM\ManyToOne(targetEntity=Course::class, inversedBy="studentGrades")
     */
    private $course;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getStudent(): ?student
    {
        return $this->student;
    }

    public function setStudent(?student $student): self
    {
        $this->student = $student;

        return $this;
    }

    public function getCourse(): ?course
    {
        return $this->course;
    }

    public function setCourse(?course $course): self
    {
        $this->course = $course;

        return $this;
    }
}
