<!DOCTYPE html>
<html>
<head>
<title>IT 2600 Lab 11</title>
<style>
    * { font-family: Arial, Helvetica, sans-serif; }
    table { max-width: 900px; margin-left: auto; margin-right: auto; border-collapse: collapse; }
    td, th { border: 1px solid teal; padding: 4px; }
    th { background-color: teal; color: white; font-size: 1.1em; font-weight: bold; }
    table tr:first-child td { border: 0px; }
</style>
</head>
<body>
<h2>Thu T Nguyen - IT 2600 - Lab 11 Professional PHP for working with MySQL</h2>
<form action="addcourse-submit.php" method="post">
<p>
Course Id<br>
<input type="text" name="courseid" id="courseid">
</p>
<p>
Title<br>
<input type="text" name="title" id="title">
</p>
<p>
Credit Hrs<br>
<input type="text" name="credits" id="credits">
</p>
<p>
Description<br>
<input type="text" name="desc" id="desc">
</p>
<p>
Prerequisites<br>
<input type="text" name="prereq" id="prereq">
</p>
<p>
    <input type="submit"> <span><input type="reset"></span>
</p>
</form>
</body>
</html>