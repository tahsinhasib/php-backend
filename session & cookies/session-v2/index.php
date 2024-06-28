

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

        <form action="process.php" method="post">
            <label for="username">Username</label>
            <input type="text" name="username"><br>
            <label for="username">Password</label>
            <input type="text" name="password"><br>
            <input type="submit" name="login" value="login">
        </form>

    </body>
</html>
