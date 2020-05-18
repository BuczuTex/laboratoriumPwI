<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset = "utf-8">
        <title>52.php</title>
    </head>
    <body>
        <form method="GET" action="53.php">
            <select name = "student">
            <?php
            $pdo = new PDO('mysql:host=localhost;dbname=uczelnia','root','');
            $sql = $pdo -> prepare('SELECT * FROM studenci');
            $sql -> execute();
            $rows = $sql->fetchAll();
            foreach($rows as $row){
                echo '<option value="'.$row['id'].'">'.$row['imie'].' '.$row['nazwisko'].'</option>';
            }
            ?>
            </select>
            <input type = "submit" name="submit" value="Usuń">
        </form>
    </body>
</html>