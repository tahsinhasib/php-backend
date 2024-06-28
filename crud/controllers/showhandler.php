<!DOCTYPE html>
<html>
<head>
    <title>User Page</title>
    <style>
        body {
            display: block;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-weight: 700;
            font-size: 20px;
            justify-content: center;
            padding: 80px 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            color: #588c7e;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 20px;
            text-align: center;
        }

        th {
            background-color: #588c7e;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

    </style>
</head>
    <body>
        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>

                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "cruddb";
                    $tablename = "users";

                    $conn = mysqli_connect($servername, $username, $password, $dbname);

                    if ($conn -> connect_error) {
                        die ("Connection failed:". $conn -> connect_error);
                    }

                    $sql = "SELECT * FROM $tablename";
                    $result = $conn -> query($sql);

                    if ($result -> num_rows > 0) {
                        while ($row = $result -> fetch_assoc()) {
                            echo "<tr>
                                <td>" . $row["id"] . "</td>
                                <td>" . $row["username"] . "</td>
                                <td>" . $row["password"] . "</td>
                                </tr>";
                        }
                        echo "</table>";
                    }
                    else {
                        echo "0 results";
                    }

                    $conn -> close();
                ?>
            </tr>
        </table>
        <a href="../index.php">Home</a>
    </body>
</html>
