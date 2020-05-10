<?php $pdo = new PDO('mysql:host=localhost;dbname=uczelnia','root',''); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>43.php</title>
</head>
<body>
<table>
    <?php
    $arr = array("Imie","Nazwisko","Kierunek","Stopien");
    echo "<table>";
    $result = $pdo->query("SELECT imie, nazwisko, kierunek, stopien FROM studenci, rok WHERE studenci.id_rok_studiow = rok.id");
    while($row = $result->fetch()){
        echo "<tr><td>".$row["imie"].' '.$row["nazwisko"].' '.$row["kierunek"].' '.$row["stopien"]."</td></tr>";
    }
    echo "</table>";
    $result = null;
    $pdo = null;
    ?>
</table>
</body>
</html>