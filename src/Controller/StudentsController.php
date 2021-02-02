<?php

namespace App\Controller;

use App\Entity\Classe;
use App\Entity\Course;
use App\Entity\Student;
use App\Form\ClassType;
use App\Form\CourseType;
use App\Form\StudentType;
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
     * @Security("is_granted('ROLE_USER') or is_granted('ROLE_ADMIN')")
     */
    public function index(Request $request): Response
    {

        $user = $this->getUser();
        dump($this->json($user));
            return $this->render('students/index.html.twig');
    }
    /**
     * @Route("/api/account", name="api_account")
     */
    public function accountApi()
    {
        $user = $this->getUser();
       return $this->json($user);
        

    }
    

    /**
     * @Route("/student/{page}",name="Page")
     
      */
    public function Student(String $page,PaginatorInterface $paginator,Request $request)
    {
   
        if($page=='students'){
            $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $select = $this->getDoctrine()->getRepository(Student::class)->findAll();
        foreach($select as $key=>$value ){
            if($value->getImage() !=null){
            $value->setImage(base64_encode(stream_get_contents($value->getImage())));
            }
        }
        return $this->render('students/student.html.twig',array('name' => $page,'select' =>$select));
        }elseif($page=='Classes'){
            $select = $this->getDoctrine()->getRepository(Classe::class)->findAll();
            $pagination = $paginator->paginate(
                $select,
                $request->query->getInt('page', 1),
                2,
            );
            $pagination->setTemplate('@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig');
            $pagination->setSortableTemplate('@KnpPaginator/Pagination/sortable_link.html.twig');
        return $this->render('students/student.html.twig',array('name' => $page,'select' =>$pagination));
        }elseif($page=='Courses'){
            $this->denyAccessUnlessGranted('ROLE_ADMIN');
            $select = $this->getDoctrine()->getRepository(Course::class)->findAll();
            $pagination = $paginator->paginate(
                $select,
                $request->query->getInt('page', 1),
                2,
            );
            $pagination->setTemplate('@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig');
            $pagination->setSortableTemplate('@KnpPaginator/Pagination/sortable_link.html.twig');
        return $this->render('students/student.html.twig',array('name' => $page,'select' =>$pagination));
        }
        return $this->render('students/student.html.twig',array('name' => $page));
    }

    /**
     * @Route("/student/student/{name}",name="new")
     */
    public function New(String $name,Request $request)
    {
        $student=new Student();
        $form=$this->createForm(StudentType::class,$student);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $entityManager=$this->getDoctrine()->getManager();
            $files=file_get_contents($form['image']->getData());
            $student->setImage($files);
            $student->setPwd(
                $this->encoder->encodePassword($student,$form['pwd']->getData())
            );
            $student->setRoles(["ROLE_USER"]);
            $entityManager->persist($student);
            $entityManager->flush();
        }
            return $this->render('students/st_insert_update.html.twig',array("name"=>$name,"Page"=>'students',"form"=>$form->createView()));

    }

      /**
     * @Route("/student/student/edit/{id}",name="update")
     */
    public function Update(int $id,Request $request):Response
    {
        $student=$this->getDoctrine()->getRepository(Student::class)->find($id);
        $student->setImage(base64_encode(stream_get_contents($student->getImage())));
        $new_student=new Student();
        if ($request->query->get('First'))  {
            $entityManager=$this->getDoctrine()->getManager()->getConnection();
            $query="update  student set first_name ='".$request->query->get('First')."',last_name=
            '".$request->query->get('Last')."',date_of_birth='".$request->query->get("Date")."' where id=".$id;
            $this->addFlash('success',"we saved a edit  student with id  ".$student->getId());
            $statement = $entityManager->prepare($query);
            $statement->execute();
        }
    return $this->render('students/st_insert_update.html.twig',array("name"=>"Update","Page"=>'students','student'=>$student));
    }

    /**
     * @Route("/student/student/Remove/{id}",name="Remove")
     */
    public function Delete(int $id,Request $request):Response
    {
        $entityManager=$this->getDoctrine()->getManager();
        $student=$this->getDoctrine()->getRepository(Student::class)->find($id);
        if(is_null($p)){
            throw $this->createNotFoundException("No student found for this id ");
        }
        $entityManager->remove($student);
        $entityManager->flush();
        $select = $this->getDoctrine()->getRepository(Student::class)->findAll();
        foreach($select as $key=>$value ){
            $value->setImage(base64_encode(stream_get_contents($value->getImage())));
        }
        return $this->render('students/student.html.twig',array('name' => 'students','select' =>$select));
    }

    /**
     * @Route("/student/student/show/{id}",name="Show")
     */
    public function Show(String $id,Request $request)
    {
        $en=$this->getDoctrine()->getManager();
        $query=$en->createQuery('select s.id,s.first_name,s.last_name,g.grade,c.name from
        App\Entity\Student s,App\Entity\StudentsGrade g ,App\Entity\Course c
        where s.id=g.student_id and c.id=g.course_id and s.id='.$id);
        $result=$query->getResult();
        return $this->render('students/show_student.html.twig',array("id"=>$id,'result'=>$result));
    }

    /**
     * @Route("/student/student/{name}",name="grade")
     */
    public function grade(String $name, Request $request){
        $en=$this->getDoctrine()->getManager();
        $query=$en->createQuery('select s.id,s.first_name,s.last_name,c.name,g.grade from
        App\Entity\Student s,App\Entity\StudentsGrade g ,App\Entity\Course c
        where g.course_id=c.id and g.student_id=s.id ');
        $result=$query->getResult();
        return $this->render('students/grade.html.twig',array('grade'=>$result,'type'=>'student'));

    }

    /**
     * @Route("/student/student/new_course/{id}",name="new_course")
     */
    public function new_course(int $id,Request $request)
    {
        $Courses = $this->getDoctrine()->getRepository(Course::class)->findAll();
        $Classes = $this->getDoctrine()->getRepository(Classe::class)->findAll();
        return $this->render('students/new_student_course.html.twig',array("id"=>$id,"course"=>$Courses,"class"=>$Classes));
    }

     /**
     * @Route("/student/student/new_student_course/{id}",name="new_student_course")
     */
    public function new_student_course(int $id,Request $request)
    {
        $Grade=new StudentsGrade();
        $Student = $this->getDoctrine()->getRepository(StudentsGrade::class)->findBy(['course_id'=>$request->query->get('course_id'),
        'student_id'=>$id
        ]);
        if($Student){
            $this->addFlash("done","student are  used this course ");
            $select = $this->getDoctrine()->getRepository(StudentsGrade::class)->findAll();
        return $this->render('students/new_student_course.html.twig',array("id"=>$id,"course"=>$select));
        }else{
        $Grade->setStudentId($id);
        $Grade->setClassId($request->query->get('classe'));
        $Grade->setCourseId($request->query->get('course_id'));
        $Grade->setGrade(0);
        $entityManager=$this->getDoctrine()->getManager();
        $entityManager->persist($Grade);
        $entityManager->flush();
        $select = $this->getDoctrine()->getRepository(Student::class)->findAll();
        foreach($select as $key=>$value ){
            $value->setImage(base64_encode(stream_get_contents($value->getImage())));
        }
    }
        return $this->render('students/student.html.twig',array('name' => 'students','select' =>$select));
    }



    /**
     * @Route("/student/classes/edit/{id}",name="update_classes")
     */
    public function Update_Classes(int $id,Request $request):Response
    {
       $Class=$this->getDoctrine()->getRepository(Classe::class)->find($id);
        $form=$this->createForm(ClassType::class,$Class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $entityManager=$this->getDoctrine()->getManager();
            $Class=$form->getData();
            $entityManager->persist($Class);
            $entityManager->flush();
            $this->addFlash('success',"we saved a edit  student with id  ".$Class->getId());
        }
    return $this->render('students/cl_insert_update.html.twig',array("name"=>"Update","Page"=>'Classes','image'=>$Class,'id'=>$id,'editForm'=>$form->createView()));
    }

       /**
     * @Route("/student/classes/{name}",name="insert_classes")
     */
    public function insert_class(String $name,Request $request)
    {
        $Class=new Classe();
        $form=$this->createForm(ClassType::class,$Class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $entityManager=$this->getDoctrine()->getManager();
            $entityManager->persist($Class);
            $entityManager->flush();
        }
        return $this->render('students/cl_insert_update.html.twig',array("name"=>'Insert',"Page"=>'classes',"form"=>$form->createView()));

    }
    /**
     * @Route("/student/classes/Remove/{id}",name="Remove_classes")
     */
    public function Remove_Delete(int $id,PaginatorInterface $paginator,Request $request):Response
    {
        $entityManager=$this->getDoctrine()->getManager();
        $Class=$this->getDoctrine()->getRepository(Classe::class)->find($id);
        if(is_null($Class)){
            throw $this->createNotFoundException("No class found for this id ");
        }
        $entityManager->remove($Class);
        $entityManager->flush();
        $select = $this->getDoctrine()->getRepository(Classe::class)->findAll();
        $pagination = $paginator->paginate(
            $select,
            $request->query->getInt('page', 1),
            2,
        );
        $pagination->setTemplate('@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig');
        $pagination->setSortableTemplate('@KnpPaginator/Pagination/sortable_link.html.twig');
        return $this->render('students/student.html.twig',array('name' => 'Classes','select'=>$pagination));
    }

    /**
     * @Route("/student/courses/edit/{id}",name="update_course")
     */
    public function Update_Course(int $id,Request $request):Response
    {
       $Course=$this->getDoctrine()->getRepository(Course::class)->find($id);
        $form=$this->createForm(CourseType::class,$Course);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $entityManager=$this->getDoctrine()->getManager();
            $Course=$form->getData();
            $entityManager->persist($Course);
            $entityManager->flush();
            $this->addFlash('success',"we saved a edit  student with id  ".$Course->getId());
        }
    return $this->render('students/course_insert_update.html.twig',array("name"=>"Update","Page"=>'Course','image'=>$Course,'id'=>$id,'editForm'=>$form->createView()));
    }
     /**
     * @Route("/student/course/{name}",name="insert_course")
     */
    public function insert_Course(String $name,Request $request)
    {
        $Course=new Course();
        $form=$this->createForm(CourseType::class,$Course);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $entityManager=$this->getDoctrine()->getManager();
            $entityManager->persist($Course);
            $entityManager->flush();
        }
        return $this->render('students/course_insert_update.html.twig',array("name"=>$name,"Page"=>'Course',"form"=>$form->createView()));

    }
    /**
     * @Route("/student/course/Remove/{id}",name="Remove_course")
     */
    public function Remove_Course(int $id,PaginatorInterface $paginator,Request $request):Response
    {
        $entityManager=$this->getDoctrine()->getManager();
        $Course=$this->getDoctrine()->getRepository(Course::class)->find($id);
        if(is_null($Course)){
            throw $this->createNotFoundException("No class found for this id ");
        }
        $entityManager->remove($Course);
        $entityManager->flush();
        $select = $this->getDoctrine()->getRepository(Course::class)->findAll();
        $pagination = $paginator->paginate(
            $select,
            $request->query->getInt('page', 1),
            2,
        );
        $pagination->setTemplate('@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig');
        $pagination->setSortableTemplate('@KnpPaginator/Pagination/sortable_link.html.twig');
        return $this->render('students/student.html.twig',array('name' => 'Courses','select'=>$select));
    }


     /**
     * @Route("/student/{student}/{filter}",name="Filter")
     */
    public function Filter(String $student,String $filter, Request $request):Response
    {
        $type=$request->query->get('type');
        $filters=$request->query->get('input');
        if($filter=='Classes'){
            $select = $this->getDoctrine()->getRepository(Classe::class)->findBy(['name'=>$filters]);
            return $this->render('students/Filter.html.twig',array('filter'=>$select,'type'=>'Classes'));
        }
        if($filter=='Courses'){
            $select = $this->getDoctrine()->getRepository(Course::class)->findBy(['name'=>$filters]);
            return $this->render('students/Filter.html.twig',array('filter'=>$select,'type'=>'Courses'));
        }
        if($filter=='students'){
            if($type=='First_Name'){
            $select = $this->getDoctrine()->getRepository(Student::class)->findBy(['first_name'=>$filters]);
            $en=$this->getDoctrine()->getManager();
            $query=$en->createQuery('select s.id,s.first_name,s.last_name,s.date_of_birth,c.name from
            App\Entity\Student s,App\Entity\StudentsGrade g ,App\Entity\Course c
            where g.course_id=c.id');
            $result=$query->getResult();
            }elseif($type=='Last_Name'){
                $select = $this->getDoctrine()->getRepository(Student::class)->findBy(['last_name'=>$filters]);
                $en=$this->getDoctrine()->getManager();
            $query=$en->createQuery('select s.id,s.first_name,s.last_name,s.date_of_birth,c.name from
            App\Entity\Student s,App\Entity\StudentsGrade g ,App\Entity\Course c
            where g.course_id=c.id');
            $result=$query->getResult();
            }elseif($type='course'){
                $select = $this->getDoctrine()->getRepository(Student::class)->findAll();
                $en=$this->getDoctrine()->getManager();
                $query=$en->createQuery("select s.id,s.first_name,s.last_name,s.date_of_birth,c.name from
                App\Entity\Student s,App\Entity\StudentsGrade g ,App\Entity\Course c
                where g.course_id=c.id and s.id=g.student_id and c.name='$filters'");
            $result=$query->getResult();
            }
            return $this->render('students/Filter.html.twig',array('filter'=>$result,'type'=>'students'));
        }
        if($filter=='show'){
            if($type=='First_Name'){
                $en=$this->getDoctrine()->getManager();
                $query=$en->createQuery("select s.id,s.first_name,s.last_name,c.name,g.grade from
                App\Entity\Student s,App\Entity\StudentsGrade g ,App\Entity\Course c
                where g.course_id=c.id and g.student_id=s.id and s.first_name='$filters'");
                $result=$query->getResult();
                return $this->render('students/Filter.html.twig',array('filter'=>$result,'type'=>'grade'));
            }elseif($type=='Course'){
                $en=$this->getDoctrine()->getManager();
                $query=$en->createQuery("select s.id,s.first_name,s.last_name,c.name,g.grade from
                App\Entity\Student s,App\Entity\StudentsGrade g ,App\Entity\Course c
                where g.course_id=c.id and g.student_id=s.id and c.name='$filters'");
                $result=$query->getResult();
                return $this->render('students/Filter.html.twig',array('filter'=>$result,'type'=>'grade'));
            }elseif($type=='grade'){
                $en=$this->getDoctrine()->getManager();
                $query=$en->createQuery("select s.id,s.first_name,s.last_name,c.name,g.grade from
                App\Entity\Student s,App\Entity\StudentsGrade g ,App\Entity\Course c
                where g.course_id=c.id and g.student_id=s.id and g.grade=".$filters);
                $result=$query->getResult();
                return $this->render('students/Filter.html.twig',array('filter'=>$result,'type'=>'grade'));
            }
        }
        return $this->render('students/Filter.html.twig',array('type'=>$type,'filter'=>$filters));

    }

}
