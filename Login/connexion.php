<?php

session_start();
$mysqli = new PDO('mysql:host=localhost;dbname=telephone;charset=utf8', 'root', '');
foreach($mysqli->query('SELECT * from telephone') as $row) {
    print_r($row);
}

    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $control = $mysqli->prepare('SELECT name, email, password FROM utilisateur WHERE email = ?');
        $control->execute(array($email));
        $data = $control->fetch();
        $row = $control->rowCount();

        if($row == 1){

            if(filter_var($email, FILTER_VALIDATE_EMAIL)){

                $password = hash('md5', $password);
                if($data['password'] === $password){

                    $_SESSION['utilisateur'] = $data['name'];
                    header('Location:../index.php');

                }else header('Location:formulaire_connexion.php?login_err=password');
            }else header('Location:formulaire_connexion.php?login_err=email');
        }else header('Location:formulaire_connexion.php?login_err=already');
    }else header('Location:formulaire_connexion.php');
    ?>