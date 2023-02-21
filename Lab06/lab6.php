<!DOCTYPE html>
<html>
    <head>
        <title>IT 2600 Lab 6</title>
    </head>
    <body>
        <h2>Thu T Nguyen - IT 2600 - Lab 6</h2>
        <?php
        //1.
        $first = $_POST['first'];
        $middle = $_POST['middle'];
        $lastName = $_POST['last'];
        $middleInitial = substr($middle, 0, 1);
        
        echo ($first . " " . $middleInitial . ". " . $lastName);
        echo "<br>" . "---" . "<br>";

        //2.
        $split = $_POST['split'];
        //replace dash - with \n so each word displays on its own line
        $split = str_ireplace('-', '<br>', $split);
        echo ($split);
        echo "<br>" . "---" . "<br>";

        //3.
        $shuffle = $_POST['shuffle'];
        echo ("Original string: " . $shuffle . "<br>");
        echo ("Shuffled string: " . str_shuffle($shuffle)); //shuffle the string
        echo "<br>" . "---" . "<br>";

        //4.
        $tolower = $_POST['tolower'];
        echo (strtolower($tolower)); //convert string to lower case
        echo "<br>" . "---" . "<br>";

        //5. 
        $compare1 = $_POST['compare1'];
        $compare2 = $_POST['compare2'];
        echo ("Case-sensitive comparison: " . strcmp($compare1, $compare2) . "<br>"); //case-sensitive comparison
        echo ("Case-insensitive comparison: " . strcasecmp($compare1, $compare2)); //case-insensitive comparison
        echo "<br>" . "---" . "<br>";

        //6. 
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        echo ("Minimum number: " . min($num1, $num2) . "<br>"); //find the minimum number 
        echo ("Maximum number: " . max($num1, $num2) . "<br>"); //find the maximum number
        echo "Average value: " . (($num1 + $num2) / 2); //find the average value
        echo "<br>" . "---" . "<br>";

        //7. Generate a random integer between 0-100
        echo ("Random integer between 0-100: " . rand(0, 100));
        echo "<br>" . "---" . "<br>";

        //8. Output value in currency format with 2 decimal place
        $currency = $_POST['currency'];
        echo (sprintf('$%.02f', $currency));
        echo "<br>" . "---" . "<br>";

        //9. 
        $year = $_POST['year'];
        $month = $_POST['month'];
        $day = $_POST['day'];
        $hour = $_POST['hour'];
        $minute = $_POST['minute'];
        
        $time = mktime($hour, $minute, 0, $month, $day, $year);
        echo ('Time format 1: ' . date("Y-m-d h:i:sa", $time) . "<br>");
        echo ('Time format 2: ' . date("h:i:sa m-d-Y ", $time));
        echo "<br>" . "---" . "<br>";

        //10. Calculate hours from previous time to now
        $now = new DateTime();
        $past = new DateTime(date("Y-m-d h:i:sa", $time));
        $time_span = $past->diff($now);
        echo $time_span->format('%R%dd %H:%I:%Sh');
        

        ?>
    </body>
</html>