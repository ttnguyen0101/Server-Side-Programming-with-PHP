<?php 
    $name = $_GET['name'];
    $major = $_GET['major'];
    $fav_language = $_GET['fav_language'];
    $ide = "";
    if (isset($_GET['vscode']) AND isset($_GET['brackets'])) {$ide = 'Both VS Code & Brackets';}
    else if(isset($_GET['vscode'])) {$ide = 'Visual Studio Code';}
    else if (isset($_GET['brackets'])) {$ide = 'Brackets';}
    else if (isset($_GET['other'])) { $ide = $_GET['othername']; }
    //else {$ide = $_GET['othername'];}
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>IT 2600 Lab 2</title>
        
    </head>
    <body>
        <h2>Thu T Nguyen - IT 2600 - Lab 2</h2>
        <h3>Summary</h3>
        <ul>
            <li>Name: <?php echo $name; ?></li>
            <li>Major: <?php echo $major; ?></li>
            <li>Favorite Web Language: <?php echo $fav_language; ?></li>
            <li>Development Environment: <?php echo $ide; ?></li>
        </ul>
        <input type=button value="Return to Form" onClick="document.location.href='http://localhost/lab/lab2/input.php'">
    </body>
</html>