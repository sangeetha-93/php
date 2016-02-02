<html>
<body>
<form name="form" id="form_id" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
firstname:<input type="text" name="firstname" id="firstname_id" value=""><br>
lastname:<input type="text" name="lastname" id="lastname_id" value=""><br>
username:<input type="text" name="username" id="username_id" value=""><br>
password:<input type="password" name="password" id="password_id" value=""><br>
email:<input type="text" name="email" id="email_id" value=""><br>
<input type="submit" value="submit" name="submit">
</form>
<?php
// connection establishment
if(isset($_POST['submit']))
 {
  $servername="localhost";
  $username="root";
  $password="ameex";
  $db="user_details";
   
 
  $connection = mysqli_connect($servername,$username,$password,$db); 
 
// Check connection
  if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
    
    //$conn->close();
  }
  else
  { 
  echo "Connected successfully";
  }

  // getting values from form; 
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $username= $_POST['username'];
  $password= $_POST['password'];
  $email = $_POST['email'];
  
 

 $sql = "INSERT INTO user values('$firstname','$lastname','$username',$password,'$email')";

 if($connection->query($sql) === TRUE)
 {
  echo $connection->query($sql);
 }
 else
 {
  echo "Error" .$sql ."<br>" .$connection->error;
 }
  $connection->close();
 }
?>
</body>
</html>
