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
    <title>Login</title>
</head>
<body>
    <h2>Thu T Nguyen - IT 2600 - Lab 12 Creating Secure Website</h2>
    <h3>Login</h3>
    <?php 
    $userid = $_POST['userid'];
    $lpassword = $_POST['lpassword'];
    
    $userid_q = $db->quote($userid);
    $lpassword_q = $db->quote($lpassword);
        
    $query = "SELECT password FROM users WHERE user_id = $userid_q";
    $statement = $db->query($query);
    $row = $statement->fetch();
    $hash = $row['password'];
        
    if (password_verify($lpassword, $hash)) {
        header("Location: index.php");
    } else {
        header("Location: login.php");
    }
    ?>
</body>
</html>