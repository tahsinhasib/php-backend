<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-weight: 700;
            font-size: 20px;
        }
    </style>
</head>
<body>



    <?php
        setcookie("fav_food", "pizza", time() + 10, "/");
        setcookie("fav_drink", "coffee", time() + (86400), "/");
        setcookie("fav_dessert", "ice cream", time() + 10, "/");


        foreach($_COOKIE as $key => $value) {
            echo "{$key} = {$value} <br>";
        }

        if(isset($_COOKIE["fav_food"])) {
            echo "buy some {$_COOKIE["fav_food"]} please.";
        }
        else {
            echo "i don't know your food";
        }
    ?>




</body>
</html>
