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
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
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

            $query = "SELECT * FROM $tablename";
            $result = mysqli_query($conn, $query);

            if (!$result) {
                die("Query failed: " . mysqli_error($conn));
            } else {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["username"]; ?></td>
                        <td><?php echo $row["password"]; ?></td>
                        <td><a href="#" class="button">Update</a></td>
                        <td><a href="#" class="button">Remove</a></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>
</body>
</html>
