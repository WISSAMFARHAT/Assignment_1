<?php

namespace App\Controller;

use App\Entity\Classe;
use App\Entity\Course;
use OpenApi\Annotations\Get;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Context\Context;
use App\Repository\ClasseRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\AbstractFOSRestController;


class ApiController extends AbstractFOSRestController
 {

  /**
   * @Rest\Get("api/classes", name="list_classes"))
   */
  public function getClasses()
  {
        $context = new Context();
        $context->addGroup('api');
        $classes =$this->getDoctrine()->getRepository(Classe::class)->findAll();
        $view = $this->view($classes, 200);
        $view->setContext($context);
      return $this->handleView($view);
  }

    /**
 * @Rest\Get("api/classe", name="classeId")
 * @return View
 */
public function getClasse(Request $request)
{
         $context = new Context();
         $context->addGroup('api');
         $classeId=$request->get("ID");
          $classe =$this->getDoctrine()->getRepository(Classe::class)->findById($classeId);
          $view = $this->view($classe, 200);
          $view->setContext($context);
        return $this->handleView($view);
        }


  /**
   * @Rest\Get("api/courses", name="List_courses")
   */
  public function getCourses()
  {
         $context = new Context();
         $context->addGroup('api');
          $courses =$this->getDoctrine()->getRepository(Course::class)->findAll();
          $view = $this->view($courses, 200);
          $view->setContext($context);
        return $this->handleView($view);
  }

  /**
 * @Rest\Get("api/course" ,name="courseId")
 * @return View
 */
public function getCourse(Request $request)
{
    $context = new Context();
    $context->addGroup('api');
    $courseId=$request->get("ID");
    $course =$this->getDoctrine()->getRepository(Course::class)->findById($courseId);
    $view = $this->view($course, 200);
    $view->setContext($context);
    return $this->handleView($view);
}
}

