<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset = "utf-8">
        <title>21.php</title>
    </head>
    <body>
        <?php echo $_SESSION["newsession"]; ?>
        <a href="22.php">22.php</a>
    </body>
</html>