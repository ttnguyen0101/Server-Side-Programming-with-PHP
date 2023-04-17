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
    <title>Sign Up</title>
    <style>
        input:focus:invalid {
            box-shadow: 0 0 5px 1px red;
        }
    </style>
</head>
<body>
    <h2>Thu T Nguyen - IT 2600 - Lab 12 Creating Secure Website</h2>
    <h3>Sign Up</h3>
    <?php 
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    //combine First Name and Last Name to create user ID
    $userid = strtolower($fname . $lname);
    $email = $_POST['email'];
    $password = $_POST['password'];

    $userid_q = $db->quote($userid);
    $email_q = $db->quote($email);

    //hash password
    $hash = password_hash($password, PASSWORD_BCRYPT);
    $hash_q = $db->quote($hash);

    //insert new user info into users table
    $query = "INSERT INTO users 
        (user_id, email, password) 
    VALUES
        ($userid_q, $email_q, $hash_q)";
    
    try {
        $insert_count = $db->exec($query);
    } catch (PDOException $e) {
        $errorMessage = "Duplicate Entry." . $e->getMessage();
        echo $errorMessage;
    }

    if ($insert_count == 1) {
        header("Location: login.php");
    } else {
        header("Location: signup.php");
    }

    //set session variable
    $_SESSION["fullname"] = $fname . " " . $lname;
    $_SESSION["userid"] = $userid;

    ?>
</body>
</html>