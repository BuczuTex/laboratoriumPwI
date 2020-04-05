<?php
header("Content-Type: text/plain");
$i = 1;
$arr = array();
while($i<=15){
    echo "$i\n";
    $i++;
}
for($j=1; $j<=15; $j++){
    echo "$j\n";
    $arr[] = $j;
}
foreach($arr as $value){
    echo "$value\n";
}
?>