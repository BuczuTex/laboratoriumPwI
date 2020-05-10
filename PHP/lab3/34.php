<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>34.php</title>
</head>
<body>
    <?php
    $con = new PDO("mysql:host=localhost;dbname=motoryzacja","root","");
    $result = $con->query("SELECT * FROM samochody WHERE id = 1 OR id = 3");
    $row;
    while($row = $result -> fetch()){
        echo $row['marka'] . ' ' . $row['model'] . ' ' . $row['pojemnosc']."<br>";
    }
    $result -> closeCursor();
    ?>
</body>
</html>