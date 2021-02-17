<?php

namespace App\Controller;

use App\Entity\Classe;
use App\Entity\Course;
use App\Form\ClassType;
use OpenApi\Annotations\Get;
use FOS\RestBundle\View\View;
use Doctrine\ORM\Mapping\Entity;
use FOS\RestBundle\Context\Context;
use App\Repository\ClasseRepository;
use JMS\Serializer\SerializationContext;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations\Post;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Annotations\AnnotationReader;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;


class ApiController extends AbstractController
 {

  /**
   * @Route("api/classes", name="list_classes"))
   * @return JsonResponse
   */
  public function getClasses(): Response
  {
    $classes = $this->getDoctrine()->getRepository(Classe::class)->findAll();
    $data =$this->serializer($classes);
    return  new JsonResponse($data);
      }

    /**
 * @Route("api/classe", name="classeId")
 */
public function getClasse(Request $request)
{
      $classeId=$request->get("ID");
      $classe = $this->getDoctrine()->getRepository(Classe::class)->findBy(['id'=>$classeId]);
      $data =$this->serializer($classe);
        return  new JsonResponse($data);
      }


  /**
   * @Route("api/courses", name="List_courses")
   */
  public function getCourses()
  {
        $courses = $this->getDoctrine()->getRepository(Course::class)->findAll();
        $data =$this->serializer($courses);
        return  new JsonResponse($data);
      }

  /**
 * @Route("api/course" ,name="courseId")
 */
public function getCourse(Request $request)
{
    $courseId=$request->get("ID");
    $course = $this->getDoctrine()->getRepository(Classe::class)->findBy(['id'=>$courseId]);
    $data =$this->serializer($course);
    return  new JsonResponse($data);

}
#using postman
/**
   * @Route("api/new_classes", name="new_classes",methods={"POST"}))
   *
   */
  public function potClasses(Request $request) 
  {

    $request = $this->transformJsonBody($request);
    $class=new Classe();
    $class->setName($request->get('name'));
    $class->setSection($request->get('section'));
    $em=$this->getDoctrine()->getManager();
    $em->persist($class);
    $em->flush();
    $json=$this->getClasses();
    return $json;
      }

protected function transformJsonBody(Request $request)
  {
   $data = json_decode($request->getContent(), true);

   if ($data === null) {
    return $request;
   }

   $request->request->replace($data);

   return $request;
  }

  protected function serializer($entity)
  {
    $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
    $normalizer = new PropertyNormalizer($classMetadataFactory);
    $serializer = new Serializer([$normalizer]);
    $data = $serializer->normalize($entity, null, ['groups' => ['api']]);
    return $data;
    
  }


}

