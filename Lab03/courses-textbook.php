<?php
    //load the database it1150
    $dsn = 'mysql:host=localhost;dbname=it1150'; 
    $username = 'root'; 
    $password = 'K!aconbuomvang123';

    //create connection
    $db = new PDO($dsn, $username, $password); 

    //select and display records from the courses table
    $query = 'SELECT * FROM courses'; 
    $statement = $db->prepare($query); 
    $statement->execute(); 
    $courses = $statement->fetchAll(); 
    $statement->closeCursor();
?>
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
        <h2>Thu T Nguyen - IT 2600 - Lab 3 using textbook</h2>
        <table>
            <tr>
                <th>Course ID</th>
                <th>Title</th>
                <th>Credit Hours</th>
                <th>Course Description</th>
                <th>Prerequisites</th>
            </tr>
            <?php foreach ($courses as $course) : ?> 
            <tr>
                <td><?php echo $course['course_id']; ?></td> 
                <td><?php echo $course['title']; ?></td> 
                <td><?php echo $course['credit_hrs']; ?></td>
                <td><?php echo $course['description']; ?></td>
                <td><?php echo $course['prerequisites']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>