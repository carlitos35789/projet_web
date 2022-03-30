<!-- <?php
// try{
//     $mysqli = new PDO('mysql:host=localhost;dbname=telephone;charset=utf8', 'root', '');
//     foreach($mysqli->query('SELECT * from telephone') as $row) {
//         print_r($row);
//     }
//     $mysqli = null;
// } catch (PDOException $e) {
//     print "Erreur !: " . $e->getMessage() . "<br/>";
//     die();
// }
// ?> -->
<?php
    // $servername = 'localhost';
    // $username = 'root';
    // $password = 'vanguardistes';
    // $dbname = 'telephone';
            
     //On établit la connexion
     $mysqli = new PDO('mysql:host=localhost;dbname=telephone;charset=utf8', 'root', 'vanguardistes');
            
    //On vérifie la connexion

?>
