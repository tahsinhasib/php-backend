<?php
    session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-weight: 700;
            font-size: 20px;
        }
    </style>
</head>
    <body>

        <form action="index.php" method="post">
            <label for="username">Username</label>
            <input type="text" name="username"><br>
            <label for="username">Password</label>
            <input type="text" name="password"><br>
            <input type="submit" name="login" value="login">
        </form>

    </body>
</html>


<?php
    if(isset($_POST["login"])) {

        if(!empty($_POST["username"]) &&
           !empty($_POST["password"])) {

            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            echo $_SESSION["username"] . "<br>";
            echo $_SESSION["password"] . "<br>";

            header("Location: home.php");

        }
        else {
            echo "missing username or password <br>";
        }
    }
?> 