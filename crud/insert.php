<!DOCTYPE html>
<html>
<head>
    <title>User Page</title>
    <style>
        body {
            display: flex;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-weight: 700;
            font-size: 20px;
            justify-content: center;
        }

        .form-div {
            margin: 80px 20px;
        }
    </style>
</head>
    <body>

        <div class="form-div">
            <form action="controllers/inserthandler.php" method="post">
                <label for="username">Username</label>
                <input type="text" name="username"><br>
                <label for="password">Password</label>
                <input type="password" name="password"><br>
                <input type="submit" name="insert" value="insert">
            </form>
            <a href="index.php">Home</a>
        </div>

    </body>
</html>
