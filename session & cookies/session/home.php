<?php
    session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <style>
            body {
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                font-weight: 700;
                font-size: 20px;
            }
        </style>
    </head>
    <body>

        <h3>This is the home page</h3>
        <form action="home.php" method="post">
            <input type="submit" name="logout" value="logout">
        </form>

    
    </body>
</html>


<?php
    echo "<br>";
    echo "Your username: " . $_SESSION["username"] . "<br>";
    echo "Your password: " . $_SESSION["password"] . "<br>";

    if(isset($_POST["logout"])) {
        session_destroy();
        header("Location: index.php");
    }
?>
