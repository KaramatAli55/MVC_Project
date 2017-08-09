<?php
//for error checking
ini_set("display_errors", true);
error_reporting(E_ALL);
require_once '../app/models/model.php';
/**
*controller class for the teacher related operation
*/
class teacherController extends Controller{
  protected $teacher;
  /**
  *construcotr of the controller class and this will also initialize the $teacher attribute with the model class object
  */
  public function __construct(){
       //echo "I am constrcut";
       $this->teacher=$this->model('teacher');
  }
  /**
  *this function will be used to call the render view function
  *this will render the addTeacher html page
  */
  public function renderView($viewName='add'){
         Controller::view('teacher/'.$viewName);
  }
  public function crud_teacher(){

           $action=$_POST['action'];
           Model::$action();
  }
  /**
  *this function will be used to call the render view function
  *this will render the showTeacher html page
  */
  public function showTeacher(){
    //ORM method call to build query
    $teach=teacher::where('teach','=','6')->get();
    Controller::view('teacher/show',['name'=>$teach->name]);
  }

  /*
  public function insertview(){
    Controller::view('teacher/add');
  }

  public function addTeacher(){
           echo 'addteacher';
           echo $_POST['id']."<br>";
          echo $_POST['name'];
           //ORM method call to build query
           Teacher::create([
             'id'=>$_POST['id'],
             'name'=>$_POST['name']
           ]);
  }

  public function deleteView(){
    Controller::view('teacher/delete');
  }

  public function deleteTeacher(){
    echo $_POST['id'];
    //ORM method call to build query
    teacher::where('id','=',$_POST['id'])->delete();
  }

  public function updateView(){
    Controller::view('teacher/update');
  }

  public function updateTeacher(){
    //ORM method call to build query
    $teach=teacher::where('id','=',$_POST['id'])->get();
    $teach->name=$_POST['name'];
    $teach->save();
  }*/

}

 ?>
