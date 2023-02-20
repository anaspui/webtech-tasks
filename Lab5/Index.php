<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <div align="center">
        <h3>
            <?php
            echo "Welcome, " . $_SESSION["username"];
            ?>
            <br>
            <a href="Registration.php">Logout
                <?php session_unset();
                session_destroy(); ?>
            </a>

        </h3>
    </div>
</body>

</html>