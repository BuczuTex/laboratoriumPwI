<?php
header("Content-Type: text/plain");
if($_POST['liczba1']==NULL && $_POST['liczba2']==NULL) echo "Obie liczby nie zostały wpisane";
else if($_POST['liczba1']==NULL) echo "Pierwsza liczba nie została wpisana";
else if($_POST['liczba2']==NULL) echo "Druga liczba nie została wpisana";
else{
    $l1 = $_POST['liczba1'];
    $l2 = $_POST['liczba2'];
    echo $l1."+".$l2."=".($l1+$l2);
    echo "\n".$l1."-".$l2."=".($l1-$l2);
    echo "\n".$l1."*".$l2."=".($l1*$l2);
    if($l2!=0) echo "\n".$l1."/".$l2."=".($l1/$l2);
    else echo "\n"."Nie można dzielić przez zero!";
}
?>