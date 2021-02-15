<?php

namespace App\Controller;

use App\Entity\Classe;
use App\Entity\Course;
use App\Form\ClassType;
use OpenApi\Annotations\Get;
use FOS\RestBundle\View\View;
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

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
        'SELECT c
        FROM App\Entity\Classe c'
        );
        $classes = $query->getResult();
        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
        $normalizer = new PropertyNormalizer($classMetadataFactory);
        $serializer = new Serializer([$normalizer]);
        $data = $serializer->normalize($classes, null, ['groups' => ['api']]);
        return  new JsonResponse($data);
      }

    /**
 * @Route("api/classe", name="classeId")
 */
public function getClasse(Request $request)
{
      $classeId=$request->get("ID");
      $em = $this->getDoctrine()->getManager();
      $query = $em->createQuery(
      'SELECT c
      FROM App\Entity\Classe c
      WHERE c.id ='.$classeId
      );
        $classe = $query->getResult();
        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
        $normalizer = new PropertyNormalizer($classMetadataFactory);
        $serializer = new Serializer([$normalizer]);
        $data = $serializer->normalize($classe, null, ['groups' => ['api']]);
        return  new JsonResponse($data);
      }


  /**
   * @Route("api/courses", name="List_courses")
   */
  public function getCourses()
  {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
        'SELECT c
        FROM App\Entity\Course c'
        );
        $courses = $query->getResult();
        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
        $normalizer = new PropertyNormalizer($classMetadataFactory);
        $serializer = new Serializer([$normalizer]);
        $data = $serializer->normalize($courses, null, ['groups' => ['api']]);
        return  new JsonResponse($data);
      }

  /**
 * @Route("api/course" ,name="courseId")
 */
public function getCourse(Request $request)
{
    $courseId=$request->get("ID");
    $em = $this->getDoctrine()->getManager();
    $query = $em->createQuery(
    'SELECT c
    FROM App\Entity\Course c
    WHERE c.id ='.$courseId
    );
    $course = $query->getResult();
    $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
    $normalizer = new PropertyNormalizer($classMetadataFactory);
    $serializer = new Serializer([$normalizer]);
    $data = $serializer->normalize($course, null, ['groups' => ['api']]);
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

}

