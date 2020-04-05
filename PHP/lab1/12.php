<?php
if($_GET['liczba1']==NULL&&$_GET['liczba2']==NULL) echo "Nie wpisano obu liczb";
else if($_GET['liczba1']==NULL) echo "Nie wpisano pierwszej liczby";
else if($_GET['liczba2']==NULL) echo "Nie wpisano drugiej liczby";
else{
    $l1 = $_GET['liczba1'];
    $l2 = $_GET['liczba2'];
    echo $l1.' '.$l2;
}
?>