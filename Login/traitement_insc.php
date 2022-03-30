<?php

require_once 'connexion_bdd.php';
session_start();

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_retype'])){

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password_retype = htmlspecialchars($_POST['password_retype']);

    $control = $mysqli->prepare('SELECT name, email, password FROM utilisateur WHERE email =?');
    $control->execute(array($email));
    $data = $control->fetch();
    $row = $control->rowCount();

    if($row == 0){

        if(strlen($name) <= 100){

            if(filter_var($email, FILTER_VALIDATE_EMAIL)){

                if($password == $password_retype){

                    $password = hash('md5', $password);
                    $insert = $mysqli->prepare('INSERT INTO utilisateur (name, password, email) VALUES (:name, :password, :email)');
                    $insert->execute(array(
                        'name' => $name,
                        'password' => $password,
                        'email' => $email
                    ));
                    if (!$mysqli->query($sql)) {
                        echo 'Error: ', $mysqli->error;
                    }
                    header('Location:inscription.php?registration_err=success');
                }else header('Location:inscription.php?registration_err=password');
            }else header('Location:inscription.php?registration_err=email');
        }else header('Location:inscription.php?registration_err=name_length');
    }else header('Location:inscription.php?registration_err=already');
}
?>