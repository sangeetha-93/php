<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "ameex";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    //$conn->close();
}
echo "Connected successfully";

$sql = "CREATE DATABASE sangeetha";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();
?>
</body>
</html>
