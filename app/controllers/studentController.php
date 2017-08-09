<?php
require_once '../app/models/model.php';
/**
*controller class for the student related operation
*/
class studentController extends Controller{

  protected $student;
  /**
  *construcotr of the controller class and this will also initialize the $student attribute with the model class object
  */
  public function __construct(){
      //  echo "I am the constrcutor of the studentController"."<br>";
       $this->student=$this->model('student');
  }
  /**
  *this function will be used to call the render view function
  *this will render the addStudent html page
  */
  public function renderView($viewName='add'){
         Controller::view('student/'.$viewName);
  }
  public function crud_student(){

           $action=$_POST['action'];
           Student::$action();
  }
  /**
  *this function will be used to call the render view function
  *this will render the showStudent html page
  */
  public function showStudent(){
    //ORM method call to build query
    $stu=Student::where('rollNo','=','3')->get();
    Controller::view('student/show',['name'=>$stu->name]);
  }

}

 ?>
