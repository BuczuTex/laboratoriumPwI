<?php
if(!empty($_GET['imie'])&&!empty($_GET['nazwisko'])&&!empty($_GET['email'])&&is_numeric($_GET['id'])&&is_numeric($_GET['rok'])){
    $pdo = new PDO('mysql:host=localhost;dbname=uczelnia','root','');
    $sql = $pdo -> prepare('INSERT INTO studenci VALUES(?,?,?,?,?)');
    $sql -> bindValue(1, $_GET["id"], PDO::PARAM_INT);
    $sql -> bindValue(2, $_GET["imie"], PDO::PARAM_STR);
    $sql -> bindValue(3, $_GET["nazwisko"],PDO::PARAM_STR);
    $sql -> bindValue(4, $_GET["email"], PDO::PARAM_STR);
    $sql -> bindValue(5, $_GET["rok"], PDO::PARAM_INT);
    $sql -> execute();
    echo "Dodano do bazy 1 studenta";
}
else{
    echo "Nieprawidłowe dane";
}
?>