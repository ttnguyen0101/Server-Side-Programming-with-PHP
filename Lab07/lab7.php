<!DOCTYPE html>
<?php 
    //Start session and set cookies
    session_start();
    
    $favlanguage = "favlanguage";
    $favlanguage_value = "Java";
    setcookie($favlanguage, $favlanguage_value, time() + (86400 * 30), "/lab7");

    $favOS = "favoperatingsystem";
    $favOS_value = "Windows";
    setcookie($favOS, $favOS_value, time() + (86400 * 30), "/lab7");
?>
<html>
    <head>
        <title>IT 2600 Lab 7</title>
        <style>
            table, th, td {
            border: 1px solid black;
            border-collapse: collapse; 
            padding: 4px;}
        </style>
    </head>
    <body>
        <h2>Thu T Nguyen - IT 2600 - Lab 7</h2>
        <?php 
        //Part 1
        //Create an array and display in alphabetic order
        $languages = array("PHP", "ASP.NET", "Ruby", "Java", "Scala", "JavaScript", "Python");
        sort($languages); 
        $array_length = count($languages);

        echo "<h3> Array </h3>";
        echo "List of server side languages: <br>";
        //loop through array $languages and print out its elements
        for ($x = 0; $x < $array_length; $x++) {
            echo $languages[$x] . "<br>";  
        }
        
        //Part 2
        //Create an associative array and display in a table
        $usage = array("Python"=>"1.4%", "ASP.NET"=>"8.3%", "Ruby"=>"5.2%", "PHP"=>"78.9%", "Java"=>"3.6%", "Scala"=>"2.0%");
        asort($usage); //sort array by value
        
        echo "<h3> Associative Array </h3>";
        echo "Usage of server-side languages:";
        echo "<table>
                <tr>
                    <th>Language</th>
                    <th>% Usage</th>
                </tr>";
        foreach($usage as $x => $x_value) {
            echo "<tr>
                <td>" . $x . "</td>
                <td>" . $x_value . "</td>
                </tr>";
        }

        echo "</table>";
        
        //Part 3
        //Set session variables
        $_SESSION["fullname"] = "Thu Nguyen";
        $_SESSION["courseid"] = "IT-2600";

        ?>
        <br>
        <input type=button value="Go to Lab 7 Favorites" onClick="document.location.href='http://localhost/lab/lab7/lab7favorites.php'">
    </body>
</html>