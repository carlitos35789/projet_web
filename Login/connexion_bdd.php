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
try
{
	$mysqli = new PDO('mysql:host=localhost;dbname=vanguardistes;charset=utf8', 'root','vanguardistes');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>;
