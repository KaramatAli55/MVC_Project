<?php
/**
*student class
*/
use Illuminate\database\Eloquent\Model as Eloquent;

class Student extends Eloquent
{
/**
*attibute of the class
*/
   public $rollNo;
   public $name;
   public $emailId;
   public $timestamps=[];

   protected $fillable=['rollNo','emailId','name'];
   /**
   *constructor of the class
   *@param $r rollno of the student
   *@param $n name of the student
   *@param $e EmailId of the student
   */

  public function Studnet($r=0, $n=null, $e=null){
    $this->rollNo=$r;
    $this->name=$n;
    $this->emailId=$e;
  }
  public function add_student(){
      echo "arriveed";
    //ORM method call to build query
    Student::create([
      'rollNo'=>$_POST['rollNo'],
      'name'=>$_POST['name'],
      'emailId'=>$_POST['emailId']
    ]);
  }
  public function delete_Student(){
    //ORM method call to build query
    Student::where('rollNo','=',$_POST['rollNo'])->delete();
  }
  public function update_Student(){
    //ORM method call to build query
    echo "update student";
    $stu=Student::where('rollNo','=',$_POST['rollNo'])->get();
    $stu->name=$_POST['name'];
    $stu->save();
  }
}
?>
