<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Document</title>
            <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h2>Signup</h2>
        <form action="includes/signup.inc.php" method="POST">
        <input type="text" name="first" placeholder= "Firstname">
        <input type="text" name="first" placeholder= "Lastname">
        <input type="text" name="first" placeholder= "E-mail">
        <input type="text" name="first" placeholder= "Username">
        <input type="text" name="first" placeholder= "Password">
        <button type="submit" name="submit">Sign up</button>
        </form>
        <?php
        $fullUrl = "http://$_SERVER[HTTP-HOST]$_SERVER[REQUEST_URI]";

        if (strops($fullUrl, "signup=empty") == true){
            echo "<p class='error'You did not fill in all fields!</p>";
            exit();
        }
        elseif (strops($fullUrl, "signup=char") == true){
            echo "<p class='error'You used an invalid characters!</p>";
            exit();
        }
        elseif (strops($fullUrl, "signup=email") == true){
            echo "<p class='error'You used an invalid email!!</p>";
            exit();
        }
        elseif (strops($fullUrl, "signup=success") == true){
            echo "<p class='success'You have been sign up!</p>";
            exit();
        }



        ?>






    </body>
</html> 