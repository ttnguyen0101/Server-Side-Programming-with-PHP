<?php 
//start session
session_start();

//load the database it2600
$dsn = 'mysql:host=localhost;dbname=it2600'; 
$username = 'root'; 
$pw = 'K!aconbuomvang123';

//create connection
$db = new PDO($dsn, $username, $pw); 
// Check connection
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Session</title>
</head>
<body>
    <h2>Thu T Nguyen - IT 2600 - Lab 12 Creating Secure Website</h2>
    <h3>Session</h3>
    <?php 
    echo "Full name: " . $_SESSION["fullname"] . "<br>";
    echo "User ID: " . $_SESSION["userid"];

    ?>
</body>
</html>