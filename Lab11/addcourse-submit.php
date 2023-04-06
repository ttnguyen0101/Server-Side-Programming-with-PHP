<?php 
    //load the database it1150
    $dsn = 'mysql:host=localhost;dbname=it1150'; 
    $username = 'root'; 
    $password = 'K!aconbuomvang123';

    //create connection
    $db = new PDO($dsn, $username, $password); 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>IT 2600 Lab 11</title>
    </head>
    <body>
        <h2>Thu T Nguyen - IT 2600 - Lab 11 Professional PHP for working with MySQL</h2>
        <?php 
            $courseid = $_POST['courseid'];
            $title = $_POST['title'];
            $credits = $_POST['credits'];
            $desc = $_POST['desc'];
            $prereq = $_POST['prereq'];

            $courseid_q = $db->quote($courseid);
            $title_q = $db->quote($title);
            $credits_q = $db->quote($credits);
            $desc_q = $db->quote($desc);
            $prereq_q = $db->quote($prereq);
            
            $query = "INSERT INTO courses
                (course_id, title, credit_hrs, description, prerequisites) 
            VALUES
                ($courseid_q, $title_q, $credits_q, $desc_q, $prereq_q)";    
            $insert_count = $db->exec($query);

            if ($insert_count == 1) {
                echo "New course added.";
            } else {
                echo "Fail to add course.";
            }
        ?>
        <input type=button value="Return to Home" onClick="document.location.href='http://localhost/lab/lab11/courses.php'">
    </body>
</html>