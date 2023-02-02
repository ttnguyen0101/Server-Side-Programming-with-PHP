<!DOCTYPE html>
<html>
    <head>
        <title>IT 2600 Lab 3</title>
        <style>
            table, th, td {
            border: 1px solid black;
            border-collapse: collapse; 
            padding: 4px;}
        </style>
    </head>
    <body>
        <h2>Thu T Nguyen - IT 2600 - Lab 3 using w3schools</h2>
        <?php
            //load the database it1150
            $dsn = 'mysql:host=localhost;dbname=it1150'; 
            $username = 'root'; 
            $password = 'K!aconbuomvang123';

            //create connection
            $db = new PDO($dsn, $username, $password); 

            //select and display records from the courses table
            $query = 'SELECT * FROM courses'; 
            $statement = $db->query($query); 
            echo "<table><tr><th>Course ID</th><th>Course Title</th><th>Credit Hours</th><th>Course Description</th><th>Prerequisites</th></tr>";
            //output data of each row
            while($row = $statement->fetch()) {
                echo "<tr>
                <td>" . $row["course_id"]. "</td>
                <td>" . $row["title"]. "</td> 
                <td>" . $row["credit_hrs"]. "</td>
                <td>" . $row["description"]. "</td>
                <td>" . $row["prerequisites"]. "</td>
                </tr>"; 
            }
            echo "</table>";
            
            //close the connection
            $db = null;
        ?>
    </body>
</html>