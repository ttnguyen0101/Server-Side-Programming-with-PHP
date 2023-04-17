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
    <form method="post" action="signup-submit.php">
        <table>
            <tr>
                <td><label for="fname">First name:</label></td>
                <td><input type="text" id="fname" name="fname" required></td>
            </tr>
            <tr>
                <td><label for="lname">Last name:</label></td>
                <td><input type="text" id="lname" name="lname" required></td>
            </tr>
            <tr>
                <td><label for="email">Email Adress:</label></td>
                <td><input type="email" id="email" name="email"required></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" id="password" name="password" required></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>