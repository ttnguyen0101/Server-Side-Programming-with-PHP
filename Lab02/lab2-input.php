<!DOCTYPE html>
<html>
    <head>
        <title>IT 2600 Lab 2</title>
        <a href="lab2-summary.php?name=$name"></a>
    </head>
    <body>
        <h2>Thu T Nguyen - IT 2600 - Lab 2</h2>
        <form action="lab2-summary.php" method="get">
            <p>
                Name<br>
                <input type="input" id="name" name="name" placeholder="Name">
            </p>
            <p>
                Major<br>
                <input type="input" id="major" name="major" placeholder="Major">
            </p>
            <p>
                Favorite Web Language<br>
                <input type="radio" id="html" name="fav_language" value="HTML">
                <label for="html">HTML</label><br>
                <input type="radio" id="css" name="fav_language" value="CSS">
                <label for="css">CSS</label><br>
                <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                <label for="javascript">JavaScript</label><br>
                <input type="radio" id="PHP" name="fav_language" value="PHP">
                <label for="PHP">PHP</label>
            </p>
            <p>
                Development Evironment<br>
                <input type="checkbox" id="ide1" name="vscode" value="vscode">
                <label for="vehicle1"> Visual Studio Code</label><br>
                <input type="checkbox" id="ide2" name="brackets" value="brackets">
                <label for="vehicle2"> Brackets</label><br>
                <input type="checkbox" id="ide3" name="other" value="other">
                <label for="vehicle3"> Other</label> 
                <input type="text" id="othername" name="othername">
            </p>
            <p><input type="submit" value="Submit"></p>
            <p><input type="reset" value="Reset"></p>
        </form> 
    </body>
</html>