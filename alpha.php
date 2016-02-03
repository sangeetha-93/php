<?
ini_set('display_error',1);
ini_set('display_startup_error',1);
error_reporting('E_ALL');
?>

<?php


$con=mysql_connect("localhost","root","ameex");  
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}   

mysql_select_db('user_details') or die(mysql_error());
echo "connected successfully";

?>

<!DOCTYPE html>
<html>
<body>

<?php
$var = $_GET["str"];
echo $var;
$query = mysql_query("SELECT * FROM alphabet WHERE name LIKE '{$var}%'");


echo "<table border='3' align='center'><caption>Display Details</caption><tr><th>Firstname</th></tr>";

   
              while ($data= mysql_fetch_row($query)) 
              {
                 echo "<tr><td>" .$data[0] ."</td>";
                 echo "<td>" .$data[1] ."</td>";
                echo "<td>" .$data[2] ."</td></tr>";
                 $i++;
              }
echo "</table>";

?>

</form>
</body>
</html>
