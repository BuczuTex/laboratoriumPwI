<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset = "utf-8">
        <title>20.php</title>
    </head>
    <body>
        <?php $_SESSION["newsession"] = "Ala ma kota"; ?>
        <a href="21.php">21.php</a>
    </body>
</html>