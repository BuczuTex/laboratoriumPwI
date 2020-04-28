<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>34.php</title>
</head>
<body>
    <?php
    $con = mysqli_connect("localhost","root","","motoryzacja");
    $result = mysqli_query($con, "SELECT * FROM samochody WHERE id = 1 OR id = 3");
    $row;
    while($row = mysqli_fetch_array($result)){
        echo $row['marka'] . ' ' . $row['model'] . ' ' . $row['pojemnosc']."<br>";
    }
    mysqli_close($con);
    ?>
</body>
</html>