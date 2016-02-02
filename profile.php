<?php
session_start();
$_SESSION['s_id']=0;
?>
<html>
<title>My Profile</title>
<link rel="stylesheet" href="menu_style.css">
<body>
<form name="profile">
<a id="lout" href="logout.php" title="Click here to Logout">Logout</a>

<?php include 'header.php'; ?>

<div name="diplay" padding="30px">
<?php
			$print_fname=$_SESSION['firstname'];
			$print_lname=$_SESSION['lastname'];
			$print_uname=$_SESSION['username'];
			$print_pwd=$_SESSION['password'];
			$print_email=$_SESSION['email'];
			$print_day=$_SESSION['day'];
			$print_month=$_SESSION['month'];
			$print_year=$_SESSION['year'];
			$print_gender=$_SESSION['gender'];
			$print_interest=$_SESSION['interest'];
			$photo=$_SESSION['photoid'];
                       
echo "<br><center>Hi ".$print_fname." Welcome to profile page. <br><hr color='black' width='375px' align='center'>";

echo "<html>
<table border=1 align='center'>
<tr>
<th>
<b>Name</b>
</th>
<td>
<b>
$print_fname $print_lname
</b>
</td>
</tr>
<tr>
<td>User Name</td>
<td>$print_uname</td>
</tr>
<tr>
<td>Password</td>
<td>$print_pwd</td>
</tr>
<tr>
<td>Email-Id</td>
<td>$print_email</td>
</tr>
<tr>
<td>Date</td>
<td>$print_day$print_month$print_year</td>
</tr>
<tr>
<td>gender</td>
<td>$print_gender</td>
</tr>
<tr>
<td>interest</td> 
<td>$print_interest</td>
</tr>
<tr>
<td>photo_id</td>
<td><img src='$photo' style='width:20%'></td>
</tr>
</table>
</html>";
?>
<input type="button" value="Edit"  title="Edit Profile" onclick="location.href = 'edit.php';">


<!--
echo "<b>".$print_fname." ".$print_lname."</b><br>User Name: ".$print_uname."<br>Password: ".$print_pwd."<br>Email-Id: ".$print_email."<br>Date:".$print_day."/".$print_month."/".$print_year."<br>gender:". $print_gender."<br>interest: ".$print_interest."<br>photo_id: ".$print_photo."<br><hr><br>";
-->
<img src="<?php echo '$photo'; ?> style='width:80%' >"
</div>
<?php include 'footer.php'; ?>

</form>
</body>
</html>
