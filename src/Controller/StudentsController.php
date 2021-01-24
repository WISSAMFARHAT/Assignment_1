<?php

namespace App\Controller;

use App\Entity\Clase;
use App\Entity\Users;
use App\Entity\Course;
use App\Entity\Student;
use App\Form\ClaseType;
use App\Form\CourseType;
use App\Form\StudentType;
use App\Entity\StudentsGrade;
use App\Form\StudentGradeType;
use Symfony\Component\Form\Forms;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StudentsController extends AbstractController
{

    
    /**
     * @Route("/", name="Login")
     */
    public function Login(Request $request): Response
    {
        $session = $request->getSession();
        if(!$session->has('User')){
        if ($request->get('User_id'))  {
            if($request->get('pwd')){
                $username=$request->get('User_id');
                $pwd=$request->get('pwd');
                $remember=$request->get('remember_me');
                $en=$this->getDoctrine()->getManager();
                $query=$en->createQuery("select U.id from App\Entity\Users U
                where U.id='".$username."'and U.pwd='".$pwd."'");
                $result=$query->getResult();
                if(count($result) >0){                    
                    $session->set("User",$username);
                    return $this->render('students/index.html.twig');
                }else{
                    $this->addFlash(
                        'notice',
                        'incorrect password or email '
                    );
                }
            }else{
                $this->addFlash(
                    'notice',
                    'put a  password '
                );
            }
        }
    }else{
        return $this->render('students/index.html.twig');
    }
        return $this->render('Login/Login.html.twig');
     }

    /**
     * @Route("/logout",name="Logout")
     */
    public function Logout(Request $request)
{
    $session = $request->getSession();
    $session->remove('User');
    $forward = $this->forward('App\Controller\StudentsController::Login');
     return $forward;
}

  /**
     * @Route("/index", name="home")
     */
    public function index(): Response
    {
        return $this->render('students/index.html.twig', [
            'controller_name' => 'StudentsController',
        ]);
    }
    /**
     * @Route("/Home/{st}",name="Student")
     */
    public function Student(String $st,PaginatorInterface $paginator,Request $request)
    {
        if($st=='students'){
        $posts = $this->getDoctrine()->getRepository(Student::class)->findAll();
        foreach($posts as $key=>$value ){
            $value->setImage(base64_encode(stream_get_contents($value->getImage())));
        }
        return $this->render('students/student.html.twig',array('name' => $st,'stt' =>$posts));
        }elseif($st=='Classes'){
            $posts = $this->getDoctrine()->getRepository(Clase::class)->findAll();
            $pagination = $paginator->paginate(
                $posts,
                $request->query->getInt('page', 1),
                2,
            );
            $pagination->setTemplate('@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig');
            $pagination->setSortableTemplate('@KnpPaginator/Pagination/sortable_link.html.twig');
        return $this->render('students/student.html.twig',array('name' => $st,'Cl' =>$pagination));
        }elseif($st=='Courses'){
            $posts = $this->getDoctrine()->getRepository(Course::class)->findAll();
            $pagination = $paginator->paginate(
                $posts,
                $request->query->getInt('page', 1),
                2,
            );
            $pagination->setTemplate('@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig');
            $pagination->setSortableTemplate('@KnpPaginator/Pagination/sortable_link.html.twig');
        return $this->render('students/student.html.twig',array('name' => $st,'Course' =>$pagination));
        }
        return $this->render('students/student.html.twig',array('name' => $st));
    }

    /**
     * @Route("/Home/student/{name}",name="new")
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
            $entityManager->persist($student);
            $entityManager->flush();
        }
            return $this->render('students/st_insert_update.html.twig',array("name"=>$name,"Page"=>'students',"form"=>$form->createView()));

    }

      /**
     * @Route("/Home/student/edit/{id}",name="update")
     */
    public function Update(int $id,Request $request):Response
    {
        $p=$this->getDoctrine()->getRepository(Student::class)->find($id);
        $p->setImage(base64_encode(stream_get_contents($p->getImage())));
        $new=new Student();
        if ($request->query->get('First'))  {
            $entityManager=$this->getDoctrine()->getManager()->getConnection();
            $query="update  student set first_name ='".$request->query->get('First')."',last_name=
            '".$request->query->get('Last')."',date_of_birth='".$request->query->get("Date")."' where id=".$id;
            $this->addFlash('success',"we saved a edit  student with id  ".$p->getId());
            $statement = $entityManager->prepare($query);
            $statement->execute();
        }
    return $this->render('students/st_insert_update.html.twig',array("name"=>"Update","Page"=>'students','student'=>$p));
    }

    /**
     * @Route("/Home/student/Remove/{id}",name="Remove")
     */
    public function Delete(int $id,Request $request):Response
    {
        $entityManager=$this->getDoctrine()->getManager();
        $p=$this->getDoctrine()->getRepository(Student::class)->find($id);
        if(is_null($p)){
            throw $this->createNotFoundException("No student found for this id ");
        }
        $entityManager->remove($p);
        $entityManager->flush();
        $posts = $this->getDoctrine()->getRepository(Student::class)->findAll();
        foreach($posts as $key=>$value ){
            $value->setImage(base64_encode(stream_get_contents($value->getImage())));
        }
        return $this->render('students/student.html.twig',array('name' => 'students','stt' =>$posts));
    }

    /**
     * @Route("/Home/student/show/{id}",name="Show")
     */
    public function Show(String $id,Request $request)
    {
        $en=$this->getDoctrine()->getManager();
        $query=$en->createQuery('select s.id,s.First_Name,s.Last_Name,g.Grade,c.Name from
        App\Entity\Student s,App\Entity\StudentsGrade g ,App\Entity\Course c
        where s.id=g.student_id and c.id=g.Course_id and s.id='.$id);
        $posts=$query->getResult();
        return $this->render('students/show_student.html.twig',array("id"=>$id,'result'=>$posts));
    }

    /**
     * @Route("/home/student/{name}",name="grade")
     */
    public function grade(String $name, Request $request){
        $en=$this->getDoctrine()->getManager();
        $query=$en->createQuery('select s.id,s.First_Name,s.Last_Name,c.Name,g.Grade from
        App\Entity\Student s,App\Entity\StudentsGrade g ,App\Entity\Course c
        where g.Course_id=c.id and g.student_id=s.id ');
        $posts=$query->getResult();
        return $this->render('students/grade.html.twig',array('grade'=>$posts,'type'=>'student'));
        
    }

    /**
     * @Route("/Home/student/new_course/{id}",name="new_course")
     */
    public function new_course(int $id,Request $request)
    {
        $posts = $this->getDoctrine()->getRepository(Course::class)->findAll();
        $clase = $this->getDoctrine()->getRepository(Clase::class)->findAll();
        return $this->render('students/new_student_course.html.twig',array("id"=>$id,"course"=>$posts,"classe"=>$clase));
    }

     /**
     * @Route("/Home/student/new_student_course/{id}",name="new_student_course")
     */
    public function new_student_course(int $id,Request $request)
    {
        $Grade=new StudentsGrade();
        $posts = $this->getDoctrine()->getRepository(StudentsGrade::class)->findBy(['Course_id'=>$request->query->get('course_id'),
        'student_id'=>$id
        ]);
        if($posts){
            $this->addFlash("done","student are  used this course ");
            $posts = $this->getDoctrine()->getRepository(StudentsGrade::class)->findAll();
        return $this->render('students/new_student_course.html.twig',array("id"=>$id,"course"=>$posts));
        }else{
        $Grade->setStudentId($id);
        $Grade->setClaseId($request->query->get('classe'));
        $Grade->setCourseId($request->query->get('course_id'));
        $Grade->setGrade(0);
        $entityManager=$this->getDoctrine()->getManager();
        $entityManager->persist($Grade);
        $entityManager->flush();
        $posts = $this->getDoctrine()->getRepository(Student::class)->findAll();
        foreach($posts as $key=>$value ){
            $value->setImage(base64_encode(stream_get_contents($value->getImage())));
        }
    }
        return $this->render('students/student.html.twig',array('name' => 'students','stt' =>$posts));
    }



    /**
     * @Route("/Home/classes/edit/{id}",name="update_classes")
     */
    public function Update_Classes(int $id,Request $request):Response
    {
       $p=$this->getDoctrine()->getRepository(Clase::class)->find($id);
        $form=$this->createForm(ClaseType::class,$p);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $entityManager=$this->getDoctrine()->getManager();
            $p=$form->getData();
            $entityManager->persist($p);
            $entityManager->flush();
            $this->addFlash('success',"we saved a edit  student with id  ".$p->getId());
        }
    return $this->render('students/cl_insert_update.html.twig',array("name"=>"Update","Page"=>'Classes','image'=>$p,'id'=>$id,'editForm'=>$form->createView()));
    }

       /**
     * @Route("/Home/classes/{name}",name="insert_classes")
     */
    public function insert_class(String $name,Request $request)
    {
        $Cl=new Clase();
        $form=$this->createForm(ClaseType::class,$Cl);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $entityManager=$this->getDoctrine()->getManager();
            $entityManager->persist($Cl);
            $entityManager->flush();
        }
        return $this->render('students/cl_insert_update.html.twig',array("name"=>'Insert',"Page"=>'classes',"form"=>$form->createView()));

    }
    /**
     * @Route("/Home/classes/Remove/{id}",name="Remove_classes")
     */
    public function Remove_Delete(int $id,Request $request):Response
    {
        $entityManager=$this->getDoctrine()->getManager();
        $p=$this->getDoctrine()->getRepository(Clase::class)->find($id);
        if(is_null($p)){
            throw $this->createNotFoundException("No classe found for this id ");
        }
        $entityManager->remove($p);
        $entityManager->flush();
        $posts = $this->getDoctrine()->getRepository(Clase::class)->findAll();
        return $this->render('students/student.html.twig',array('name' => 'Classes','Cl'=>$posts));
    }

    /**
     * @Route("/student/courses/edit/{id}",name="update_course")
     */
    public function Update_Course(int $id,Request $request):Response
    {
       $p=$this->getDoctrine()->getRepository(Course::class)->find($id);
        $form=$this->createForm(CourseType::class,$p);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $entityManager=$this->getDoctrine()->getManager();
            $p=$form->getData();
            $entityManager->persist($p);
            $entityManager->flush();
            $this->addFlash('success',"we saved a edit  student with id  ".$p->getId());
        }
    return $this->render('students/course_insert_update.html.twig',array("name"=>"Update","Page"=>'Course','image'=>$p,'id'=>$id,'editForm'=>$form->createView()));
    }
     /**
     * @Route("/Student/course/{name}",name="insert_course")
     */
    public function insert_Course(String $name,Request $request)
    {
        $Cl=new Course();
        $form=$this->createForm(CourseType::class,$Cl);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $entityManager=$this->getDoctrine()->getManager();
            $entityManager->persist($Cl);
            $entityManager->flush();
        }
        return $this->render('students/course_insert_update.html.twig',array("name"=>$name,"Page"=>'Course',"form"=>$form->createView()));

    }
    /**
     * @Route("/Home/course/Remove/{id}",name="Remove_course")
     */
    public function Remove_Course(int $id,Request $request):Response
    {
        $entityManager=$this->getDoctrine()->getManager();
        $p=$this->getDoctrine()->getRepository(Course::class)->find($id);
        if(is_null($p)){
            throw $this->createNotFoundException("No classe found for this id ");
        }
        $entityManager->remove($p);
        $entityManager->flush();
        $posts = $this->getDoctrine()->getRepository(Course::class)->findAll();
        return $this->render('students/student.html.twig',array('name' => 'Courses','Course'=>$posts));
    }


     /**
     * @Route("/home/{student}/{filter}",name="Filter")
     */
    public function Filter(String $student,String $filter, Request $request):Response
    {
        $type=$request->query->get('type');
        $filters=$request->query->get('input');
        if($filter=='Classes'){
            $posts = $this->getDoctrine()->getRepository(Clase::class)->findBy(['Name'=>$filters]);
            return $this->render('students/Filter.html.twig',array('filter'=>$posts,'type'=>'Classes'));
        }
        if($filter=='Courses'){
            $posts = $this->getDoctrine()->getRepository(Course::class)->findBy(['Name'=>$filters]);
            return $this->render('students/Filter.html.twig',array('filter'=>$posts,'type'=>'Courses'));
        }
        if($filter=='students'){
            if($type=='First_Name'){
            $posts = $this->getDoctrine()->getRepository(Student::class)->findBy(['First_Name'=>$filters]);
            $en=$this->getDoctrine()->getManager();
            $query=$en->createQuery('select s.id,s.First_Name,s.Last_Name,s.Date_of_Birth,c.Name from
            App\Entity\Student s,App\Entity\StudentsGrade g ,App\Entity\Course c
            where g.Course_id=c.id');
            $posts=$query->getResult();
            }elseif($type=='Last_Name'){
                $posts = $this->getDoctrine()->getRepository(Student::class)->findBy(['Last_Name'=>$filters]);
                $en=$this->getDoctrine()->getManager();
            $query=$en->createQuery('select s.id,s.First_Name,s.Last_Name,s.Date_of_Birth,c.Name from
            App\Entity\Student s,App\Entity\StudentsGrade g ,App\Entity\Course c
            where g.Course_id=c.id');
            $posts=$query->getResult();
            }elseif($type='course'){
                $posts = $this->getDoctrine()->getRepository(Student::class)->findAll();
                $en=$this->getDoctrine()->getManager();
                $query=$en->createQuery("select s.id,s.First_Name,s.Last_Name,s.Date_of_Birth,c.Name from
                App\Entity\Student s,App\Entity\StudentsGrade g ,App\Entity\Course c
                where g.Course_id=c.id and s.id=g.student_id and c.Name='$filters'");
            $posts=$query->getResult();
            }
            return $this->render('students/Filter.html.twig',array('filter'=>$posts,'type'=>'students'));
        }
        if($filter=='show'){
            if($type=='First_Name'){
                $en=$this->getDoctrine()->getManager();
                $query=$en->createQuery("select s.id,s.First_Name,s.Last_Name,c.Name,g.Grade from
                App\Entity\Student s,App\Entity\StudentsGrade g ,App\Entity\Course c
                where g.Course_id=c.id and g.student_id=s.id and s.First_Name='$filters'");
            $posts=$query->getResult();
            return $this->render('students/Filter.html.twig',array('filter'=>$posts,'type'=>'grade'));
            }elseif($type=='Course'){
                $en=$this->getDoctrine()->getManager();
                $query=$en->createQuery("select s.id,s.First_Name,s.Last_Name,c.Name,g.Grade from
                App\Entity\Student s,App\Entity\StudentsGrade g ,App\Entity\Course c
                where g.Course_id=c.id and g.student_id=s.id and c.Name='$filters'");
            $posts=$query->getResult();
            return $this->render('students/Filter.html.twig',array('filter'=>$posts,'type'=>'grade'));
            }elseif($type=='grade'){
                $en=$this->getDoctrine()->getManager();
                $query=$en->createQuery("select s.id,s.First_Name,s.Last_Name,c.Name,g.Grade from
                App\Entity\Student s,App\Entity\StudentsGrade g ,App\Entity\Course c
                where g.Course_id=c.id and g.student_id=s.id and g.Grade=".$filters);
            $posts=$query->getResult();
            return $this->render('students/Filter.html.twig',array('filter'=>$posts,'type'=>'grade'));
            }
        }
        return $this->render('students/Filter.html.twig',array('type'=>$type,'filter'=>$filters));

    }

}
