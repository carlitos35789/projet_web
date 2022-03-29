<?php
try {
        $mysqli = new PDO('mysql:host=localhost;dbname=telephone;charset=utf8;port=22', 'root', "");
    foreach($mysqli->query('SELECT * from telephone') as $row) {
        print_r($row);
    }
    $mysqli = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
