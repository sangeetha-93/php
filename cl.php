<html>
<?php
class course
{
public $course;
public function __construct() {
  $this->course="MCA";
 }
}
class semester extends course
{  public function __construct() {
   parent::__construct();
}
public function semester1()
{
       $this->s1=30;
       $this->s2=90;
       $this->s3=80;
       $this->s4=90;
       $this->s5=90;
       $this->s6=90;
}
public function semester2()
{
       $this->s1=80;
       $this->s2=90;
       $this->s3=80;
       $this->s4=90;
       $this->s5=90;
       $this->s6=90;
}
public function semester3()
{
       $this->s1=80;
       $this->s2=90;
       $this->s3=80;
       $this->s4=90;
       $this->s5=90;
       $this->s6=90;
}
public function semester4()
{
       $this->s1=80;
       $this->s2=90;
       $this->s3=80;
       $this->s4=90;
       $this->s5=90;
       $this->s6=90;
}
}
class subject extends semester 
    {
       public $s1,$s2,$s3,$s4,$s5,$s6;
       public function __construct() 
        {
       parent::__construct();
        }
    }

class student extends subject 
  {
  public $t;
  public $p;
  public $name="Helan Gracy MJ";
  public $regno="134CS102";
    public function __construct()
    {
        parent::__construct();   
    }
    public function total() 
   {
     $s1=$this->s1;
     $s2=$this->s2;
     $s3=$this->s3;
     $s4=$this->s4;
     $s5=$this->s5;
     $s6=$this->s6;

      $t=$s1+$s2+$s3+$s4+$s5+$s6;
      
      $p=$t/6;
     $per=array($p);
     for($i=0;$i<4;$i++)
    {
       $per=$per[0].$per[1];
    }
echo "<br>";
    if($s1>=35 and $s2>=35 and $s3>=35 and $s4>=35 and $s5>=35 and $s6>=35)
         {
           $r="pass";
         }
    else
        {
          $r="fail";

        }
?>
<html>
<table border="20"><tr><th>Register Number</th><th><?php echo $this->regno;?></th></tr>
                   <tr><th>Name</th><th><?php echo $this->name;?></tr>
                   <tr><th>Course</th><th><?php echo $this->course;?></tr>
                   <tr><th>Major paperI</th><th><?php echo $s1;?></th></tr>
                   <tr><th>Major paperII</th><th><?php echo $s2;?></th></tr>
                   <tr><th>Major paperIII</th><th><?php echo $s3;?></th></tr>
                   <tr><th>Allied paperI</th><th><?php echo $s4;?></th></tr>
                   <tr><th>Allied paperII</th><th><?php echo $s5;?></th></tr>
                   <tr><th>Allied paperIII</th><th><?php echo $s4;?></th></tr>
                   <tr><th>Total</th><th><?php echo $t;?></th></tr>
                   <tr><th>Percentage</th><th><?php echo $per."%";?></th></tr>
                   <tr><th>Status</th><th><?php echo $r;?></th></tr> </table>

</html>
<?php
}

}

$a = new student();
$a->semester1();
$a->total();
echo "semesterI";

$b = new student();
$b->semester2();
$b->total();
echo "<br>";
echo "semesterII";

$c = new student();
$c->semester3();
$c->total();
echo "<br>";
echo "semesterIII";
$d = new student();

$d->semester4();
$d->total();
echo "<br>";
echo "semesterIV";
?>





