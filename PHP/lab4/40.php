<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=uczelnia','root','');
    $pdo->beginTransaction();
    $pdo->exec("INSERT INTO `rok` (id, nazwa, kierunek, stopien) VALUES (1,'1I1S-IO','Informatyka',1)");
    $pdo->exec("INSERT INTO `rok` (id, nazwa, kierunek, stopien) VALUES (2,'2I1S-IO','Informatyka',1)");
    $pdo->exec("INSERT INTO `studenci` (id, imie, nazwisko, email, id_rok_studiow) VALUES (1,'Damian','Kaczor','dakacz@op.pl',1)");
    $pdo->exec("INSERT INTO `studenci` (id, imie, nazwisko, email, id_rok_studiow) VALUES (2,'Natalia','Buk','nabuk@gmail.com',1)");
    $pdo->exec("INSERT INTO `studenci` (id, imie, nazwisko, email, id_rok_studiow) VALUES (3,'Mariusz','Buk','mark@gmail.com',2)");
    $pdo->commit();
    echo "Success \n";
} catch(PDOException $e){
    $pdo->rollBack();
    echo 'Blad';
    throw $e;
}
$pdo = null;
?>