<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cruddb";
    $tablename = "users";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    if (isset($_POST['insert'])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (empty($username)) {
            echo "Username Missing";
        }
        else if (empty($password)) {
            echo "Password Missing";
        }

        else {
            $sql = "INSERT INTO $tablename (username, password) VALUES ('$username', '$password')";

            if (isset($_POST['insert']) && mysqli_query($conn, $sql)) {
                echo "Inserted";
            }
        }
    }
?>