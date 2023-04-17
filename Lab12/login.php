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
    <style>
        input:focus:invalid {
            box-shadow: 0 0 5px 1px red;
        }
    </style>
</head>
<body>
    <h2>Thu T Nguyen - IT 2600 - Lab 12 Creating Secure Website</h2>
    <h3>Login</h3>
    <form method="post" action="login-submit.php">
        <table>
            <tr>
                <td><label for="userid">User ID:</label></td>
                <td><input type="text" id="userid" name="userid" required></td>
            </tr>
            <tr>
                <td><label for="lpassword">Password:</label></td>
                <td><input type="password" id="lpassword" name="lpassword" required></td>
            </tr>
            <tr>
                <td><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>