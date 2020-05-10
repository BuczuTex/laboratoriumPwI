<?php
$pdo = new PDO('mysql:host=localhost;dbname=uczelnia','root','');
if($pdo->exec("UPDATE studenci SET nazwisko='Malinowski' WHERE id=3")){
    echo "Wykonano pomyślnie";
}
else{
    echo "Błąd";
}
$pdo=null;
?>