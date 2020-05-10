<?php
$pdo = new PDO('mysql:host=localhost;dbname=uczelnia','root','');
if($pdo->exec("DELETE FROM studenci WHERE id=2")){
    echo "Pomyślnie usunięto";
}
else{
    echo "Błąd";
}
$pdo=null;
?>