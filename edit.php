<?php 
session_start();
?>
<!doctype html>
<html>
<head>
<script type="text/javascript" src="reg_validation.js">
</script>
</head>
<body>
<form name="edit" method="post" >
<?php include 'header.php'; ?>
<table  style="color:white;border-style:inset; height:250px;" border="1">
<tr>
<th colspan="4"><h3>Profile Details</h3></th>
</tr>

<?php 
$fn=$_SESSION['firstname']; 
$ln=$_SESSION['lastname']; 
$un=$_SESSION['username']; 
$pwd=$_SESSION['password']; 
$email=$_SESSION['email'];
$photoid =$_SESSION['photoid'];
$gender =$_SESSION['gender'];
$interest=$_SESSION['interest'];
$ini = explode(",", $interest);
//echo $ini[0];
//echo $ini[1];
$len=count($ini);
//echo $len;

$day=$_SESSION['day'];
$month=$_SESSION['month'];
$year=$_SESSION['year'];
?>
<tr>
<td>First Name</td>
<td>
<input type="text" name="fname" size="30"  required placeholder="Enter Your First Name" value="<?php echo $fn ?>"><p id="pd1"></p></td>
<td>Last Name</td>
<td><input type="text" id="lname" value="<?php echo $ln ?>" name="lname" size="30" onfocus="focustxt()" onblur="validation()" required placeholder="Enter Your Last Name" ><p id="pd2"></p></td>
</tr>

<tr>
<td>User Name</td>
<td><input type="text" id="uname" name="uname" value="<?php echo $un ?>"size="30" onfocus="focustxt()" onblur="validation()" required placeholder="Enter Your User Name" ><p id="pd3"></p></td>
<td>Password</td>
<td><input type="password" id="pwd" name="pwd" size="30" value="<?php echo $pwd ?>" onfocus="focustxt()" onblur="validation()" required placeholder="Enter Your Password" ><p id="pd4"></p></td>
</tr>

<tr>
<td>Date of Birth</td>
<td>
<select name="day[]" id="day" size="5" multiple>
<option value="0"><?php echo $day ?></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>

<select name="month[]" id="month" size="5" multiple>
<option value="1"><?php echo $month ?></option>
<option value="january">january</option>
<option value="february">february</option>
<option value="march">march</option>
<option value="april">april</option>
<option value="may">may</option>
<option value="june">june</option>
<option value="july">july</option>
<option value="august">august</option>
<option value="setember">setember</option>
<option value="october">october</option>
<option value="november">november</option>
<option value="december">december</option>
</select>
<select name="year[]" id="year" size="5" multiple>
<option value="2"><?php echo "<b>$year</b>" ?></option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
</select>
</td>


<td>Email-Id</td>
<td><input type="text" id="email" name="email" size="30" value="<?php echo $email ?>" onfocus="focustxt()" onblur="validation()" required placeholder="Enter Your Email Id" ><p id="pd5"></p></td>
</tr>
<tr>
<td>Gender</td>
<td>
<input  <?php if (($gender)=='male')
          {
           echo  'checked="checked" ';
         } 
       ?>
                                      type="radio" name="gender" value="male" > Male 
<input  <?php if (($gender)=='female')
          {
            echo  'checked="checked" ';
         } 
       ?> type="radio" name="gender" value="female"> Female</td>

<td rowspan="2"><label for="file">Photo Upload:</label></td>
<td rowspan="2">
<?php echo "<img src='$photoid'  style='width:80px'/>"." "; ?>
<input type="file" name="file"  title="<?php echo $photoid; ?>">    <!--image-->
<input type ="button" name="remove" value="remove" id="remove_id" onclick="hide();">
</td>
</tr>

<tr>
<td>Interest</td>
<td>
<input  <?php  for ($i=0;$i<$len;$i++)
	{
	 if($ini[$i] == "dancing") 
                  { 
           echo  'checked="checked" ';
                  }
	}        
       ?>type="checkbox" name="interest[]" value="dancing">Dancing 

<input <?php  for ($i=0;$i<$len;$i++)
	{
	 if($ini[$i] == "singing") 
                  { 
           echo  'checked="checked" ';
                  }
	}        
       ?>type="checkbox" name="interest[]" value="singing">Singing 
<input <?php  for ($i=0;$i<$len;$i++)
	{
	 if($ini[$i] == "drawing") 
                  { 
           echo  'checked="checked" ';
                  }
	}        
       ?>type="checkbox" name="interest[]" value="drawing">Drawing 
</td>
</tr>

<tr>
<th colspan="2"><input type="submit"  name ="submit" title="Save Changes" value="submit" size="10"></th>
<th colspan="2"><input type="submit"  title="Back To Profile Page" value="Cancel" size="10" onclick="location.href = 'profile.php';"></th>
</tr>

</table>

<?php require 'footer.php'; ?>

<?php

$servername = "localhost";
$username = "root";
$password = "ameex";
$dbname = "Easy_Learn";

//crear connection
   $conn = mysql_connect($servername, $username, $password,$dbname);

//check connection
    if(! $conn ) 
    { 
       die('Could not connect: ' . mysql_error());
    }

//echo "connection created";

if(isset($_POST['submit']))    // submitting the edited form
{
  if(isset($_POST['fname']))  // firstname
   {
    $first = $_POST['fname'];  
   mysql_select_db('Easy_Learn'); 
   $sql = "UPDATE registration_table SET First_Name = '$first' WHERE User_Name = '" .$_SESSION['username']."'";
   $retval = mysql_query( $sql, $conn );
   }
  if(isset($_POST['lname'])) //lastname
   {
    $last = $_POST['lname'];  
   mysql_select_db('Easy_Learn'); 
   $sql = "UPDATE registration_table SET Last_Name = '$last' WHERE User_Name = '" .$_SESSION['username']."'";
   $retval = mysql_query( $sql, $conn );
   } 
  if(isset($_POST['uname'])) //username
   {
    $user = $_POST['uname'];  
   mysql_select_db('Easy_Learn'); 
   $sql = "UPDATE registration_table SET User_Name = '$user' WHERE User_Name = '" .$_SESSION['username']."'";
   $retval = mysql_query( $sql, $conn );
   } 
   if(isset($_POST['pwd'])) //password
   {
    $password = $_POST['pwd'];  
   mysql_select_db('Easy_Learn'); 
   $sql = "UPDATE registration_table SET Password = '$password' WHERE User_Name = '" .$_SESSION['username']."'";
   $retval = mysql_query( $sql, $conn );
   } 
   if(isset($_POST['email']))  //Email
   {
    $mail = $_POST['email'];  
   mysql_select_db('Easy_Learn'); 
   $sql = "UPDATE registration_table SET Email_ID = '$mail' WHERE User_Name = '" .$_SESSION['username']."'";
   $retval = mysql_query( $sql, $conn );
   } 
 
  if(isset($_POST['day']))   //drop down - day
  { 
      $day = $_POST['day'];
  $imday = implode(",",$day);
  $sql = "UPDATE registration_table SET Day= '$imday' WHERE User_Name = '" .$_SESSION['username']."'";
   $retval = mysql_query( $sql, $conn );
  }
  
  if(isset($_POST['month']))    //drop down - month						
  { 
      $month = $_POST['month'];
  $immonth = implode(",",$month);
  $sql = "UPDATE registration_table SET Month= '$immonth' WHERE User_Name = '" .$_SESSION['username']."'";
   $retval = mysql_query( $sql, $conn );
  }  
 
   if(isset($_POST['year'])) //drop down - year
  { 
      $year = $_POST['year'];
  $imyear = implode(",",$year);
  $sql = "UPDATE registration_table SET Year= '$imyear' WHERE User_Name = '" .$_SESSION['username']."'";
   $retval = mysql_query( $sql, $conn );
  }   

   if(isset($_POST['gender'])) // Radio -Gender 
   { 
      $gender = $_POST['gender'];
  $sql = "UPDATE registration_table SET Gender= '$gender' WHERE User_Name = '" .$_SESSION['username']."'";
   $retval = mysql_query( $sql, $conn );
  }
 
   if(isset($_POST['interest']))  //checkBox - countries
  { 
      $interest = $_POST['interest'];
  $iminterest = implode(",",$interest);
  $sql = "UPDATE registration_table SET Interest= '$iminterest' WHERE User_Name = '" .$_SESSION['username']."'";
   $retval = mysql_query( $sql, $conn );
  }  

}

?>
</form>
</body>
</html>
