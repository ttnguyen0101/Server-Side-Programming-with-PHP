<!DOCTYPE html>
<html>
<head>
  <title>IT 2600 Lab 11</title>
    <style>
        * { font-family: Arial, Helvetica, sans-serif; }
        table { max-width: 900px; margin-left: auto; margin-right: auto; border-collapse: collapse; }
        td, th { border: 1px solid teal; padding: 4px; }
        th { background-color: teal; color: white; font-size: 1.1em; font-weight: bold; }
        table tr:first-child td { border: 0px; font-size: 1.2em; }
        select { font-size: 1.1em; }
        h2, h3 {
        text-align: center;}
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<h2>Thu T Nguyen - IT 2600 - Lab 11 Professional PHP for working with MySQL</h2>
<?php
$servername = "localhost";
$username = "root";
$password = "K!aconbuomvang123";
$dbname = "it1150";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM courses";
$result = mysqli_query($conn, $sql);

?>
<table>
<tr>
<td colspan="2" align="left">
<a href="addcourse.php"><i class="fas fa-plus-circle"></i> Add Course</a>
</td>
<td colspan="2" align="right">
    
    <form action="courses.php" method="post">
      Sort by 
      <select name="sortcourses">
        <option value="default">Default</option>
        <option value="courseid">Course Id</option>
        <option value="title">Title</option>
        <option value="description">Description</option>
      </select>
      <input type="submit" value="Sort">
    </form>
</td>
</tr>
<tr><th>Course Id</th><th>Title</th><th>Credit Hrs</th><th>Description</th></tr>
<?php
if (isset($_POST['sortcourses'])) {
  if ($_POST['sortcourses'] == 'courseid') {
    $sql = "SELECT * FROM courses ORDER BY course_id";
    $result = mysqli_query($conn, $sql);
    echo "<h3>Sort by Course Id<h3>";
  } else if ($_POST['sortcourses'] == 'title') {
    $sql = "SELECT * FROM courses ORDER BY title";
    $result = mysqli_query($conn, $sql);
    echo "<h3>Sort by Title<h3>";
  } else if ($_POST['sortcourses'] == 'description') {
    $sql = "SELECT * FROM courses ORDER BY description";
    $result = mysqli_query($conn, $sql);
    echo "<h3>Sort by Description<h3>";
  } else {
    $sql = "SELECT * FROM courses";
    $result = mysqli_query($conn, $sql);
    echo "<h3>Sort by Default<h3>";
  }
}

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["course_id"]. "</td><td>" . $row["title"]. "</td>" . 
         "<td>" . $row["credit_hrs"]. "</td><td>" . $row["description"]. "</td></tr>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>