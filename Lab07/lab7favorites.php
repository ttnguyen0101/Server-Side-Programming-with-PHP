<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <title>Lab 7 Favorites</title>
    </head>
    <body>
        <?php 
        //display session variables
        echo "<h3>Sessions</h3>";
        echo "Full name: " . $_SESSION["fullname"] . "<br>";
        echo "Course: " . $_SESSION["courseid"];

        //display cookie values
        echo "<h3>Cookies</h3>";
        if(!isset($_COOKIE["favlanguage"])) {
            echo "Cookie named 'favlanguage' is not set.";
        } else {
            echo "Cookie 'favlanguage' is set with value '" . $_COOKIE["favlanguage"] . "'.";
        }
        echo "<br>";
        if(!isset($_COOKIE["favoperatingsystem"])) {
            echo "Cookie named 'favoperatingsystem' is not set.";
        } else {
            echo "Cookie 'favoperatingsystem' is set with value '" . $_COOKIE["favoperatingsystem"] . "'.";
        }
        
        ?>
        <br>
        <br>
        <input type=button value="Return to Lab 7" onClick="document.location.href='http://localhost/lab/lab7/lab7.php'">
    </body>
</html>