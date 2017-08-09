<?php
/**
*Teacher class
*/
use Illuminate\database\Eloquent\Model as Eloquent;
class teacher extends Eloquent
{
/**
*attibute of the class
*/
   public $id;
   public $name;
   protected $fillable=['id','name'];
   public $timestamps=[];
   /**
   *constructor of the class
   *@param $i id of the teacher
   *@param $n name of the teacher
   */
  public function __construct($i=0, $n=null){
    $this->id=$i;
    $this->name=$n;
  }
  public function add_Teacher(){
           echo "add_teacher called";
           //ORM method call to build query
           Teacher::create([
             'id'=>$_POST['id'],
             'name'=>$_POST['name']
           ]);
  }
  public function delete_Teacher(){
    echo "delete_teacher called";
    //ORM method call to build query
    teacher::where('id','=',$_POST['id'])->delete();
  }
  public function update_Teacher(){
    echo "update_teacher called";
    //ORM method call to build query
    $teach=teacher::where('id','=',$_POST['id'])->get();
    $teach->name=$_POST['name'];
    $teach->save();
  }
}
?>
