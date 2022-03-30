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


<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php
            $servername = 'localhost';
            $username = 'root';
            $password = 'vanguardistes';
            
            //On établit la connexion
            $conn = new mysqli($servername, $username, $password);
            
            //On vérifie la connexion
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }
            echo 'Connexion réussie';
        ?>
    </body>
</html>