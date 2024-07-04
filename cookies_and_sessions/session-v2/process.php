<?php
    session_start();
?>

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




<?php

    if(isset($_POST["logout"])) {
        session_destroy();
        header("Location: index.php");
    }
?>