<?php
if(isset($_GET['student'])){
    $selected = $_GET['student'];
    $pdo = new PDO('mysql:host=localhost;dbname=uczelnia','root','');
    $sql = $pdo -> prepare('DELETE FROM studenci WHERE id='.$selected);
    $sql -> execute();
    echo "Pomyślnie usunięto";
}
else{
    echo "Coś poszło nie tak";
}
?>