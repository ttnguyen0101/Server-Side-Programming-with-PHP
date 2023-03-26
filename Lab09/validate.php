<!DOCTYPE html>
<html>
    <head>
        <title>IT 2600 Lab 9</title>
        <?php 
            $password =  $_POST["pwd"];
            $weather = $_POST["weather"];
            $season = $_POST["favseason"];
            $num1 = $_POST['operand1'];
            $num2 = $_POST['operand2'];
        ?>
    </head>
    <body>
        <h2>Thu T Nguyen - IT 2600 - Lab 9 Regular Expressions & Exception Handling</h2>
        <b>Password: </b>
        <?php 
            //$symbols = "/[!^]/";
            if (preg_match("/[!^]/", $password)) {
                echo "Contains invalid character. ";
                if ((str_contains($password, "!")) AND (str_contains($password, "^"))) {
                    echo "Both '!' and '^' are found.";
                } else if (preg_match("/!/", $password)) {
                    echo "'!' is found.";
                } else if (preg_match("/^/", $password)) {
                    echo "'^' is found.";
                }
            } else {
                echo "Password accepted.";
            }
        ?><br>

        <b>Weather description: </b>
        <?php 
            if (preg_match("/sunny/i", $weather)) {
                echo "Wear sunscreen.";
            } else if (preg_match("/cold/i", $weather)) {
                echo "Wear a hat."; 
            } else if (preg_match("/rain/i", $weather)) {
                echo "Bring an umbrella.";
            } else {
                echo "No reminder.";
            }
        ?><br>

        <b>Favorite season</b><br>
        <?php 
            echo "Spring: " . preg_match_all("/spring/i", $season) . "<br>";
            echo "Summer: " . preg_match_all("/summer/i", $season) . "<br>";
            echo "Fall: " . preg_match_all("/fall/i", $season) . "<br>";
            echo "Winter: " . preg_match_all("/winter/i", $season); 
        
        ?><br>

        <b>Division problem: </b>
        <?php 

            function divide($dividend, $divisor) {
                if($divisor == 0) {
                  throw new Exception("Division by zero");
                }
                return $dividend / $divisor;
              }
            try {
                echo divide($num1, $num2);
            } catch(Exception $e) {
                echo "Division by 0. Unable to divide.";
            };
        ?><br>
        <br>
        <input type=button value="Return to Home" onClick="document.location.href='http://localhost/lab/lab9/index.php'">
    </body>
</html>