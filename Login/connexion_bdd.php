<?php
try {
        $mysqli = new PDO('mariadb:host=localhost;dbname=telephone;charset=utf8', $user, $mdp);
    foreach($mysqli->query('SELECT * from telephone') as $row) {
        print_r($row);
    }
    $mysqli = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
