<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset = "utf-8">
        <title>22.php</title>
    </head>
    <body>
        <?php echo $_SESSION["newsession"]; ?>
        <a href="23.php">23.php</a>
    </body>
</html>