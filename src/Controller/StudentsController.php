<?php

namespace App\Controller;

use App\Entity\Classe;
use App\Entity\Course;
use App\Entity\Student;
use App\Form\ClassType;
use App\Form\CourseType;
use App\Form\StudentType;
use App\Entity\StudentGrade;
use App\Entity\StudentsGrade;
use App\Form\StudentGradeType;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Component\Form\Forms;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Csrf\TokenStorage\TokenStorageInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class StudentsController extends AbstractController
{

    private $encoder;
    public function __construct(UserPasswordEncoderInterface $encoder){
        $this->encoder=$encoder;
    }
    /**
     * @Route("/login", name="login")
     */
    public function Login(Request $request,AuthenticationUtils $Utils): Response
    {
        dump($Utils);
        $error=$Utils->getLastAuthenticationError();
        $LastUsername=$Utils->getLastUsername();
        return $this->render('Login/Login.html.twig',[
            'error'=>$error,'last_username'=>$LastUsername
        ]);
        }
    

    /**
     * @Route("/logout",name="logout")
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_USER')")
     */
    public function Logout(Request $request)
        {
        }
/**
     * @Route("/", name="home")
     */
    public function index(Request $request): Response
    {

        $user = $this->getUser();
        dump($user);
        
            return $this->render('students/index.html.twig');
    }
    /**
     * @Route("/api", name="list")
     */
    public function list(Request $request): Response
    {

       
      return $this->render('api/index.html.twig');
       
    }


}
