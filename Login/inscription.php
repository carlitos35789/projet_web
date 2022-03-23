<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
<div class="login">
        <?php
            if(isset($_GET['registration_err'])){
                $error = htmlspecialchars($_GET['registration_err']);

                switch($error){
                    case 'success':
                    ?>
                        <div class = "alert">
                            <strong>Succès</strong> Inscription Réussie !
                        </div>
                    <?php
                    break;

                    case 'password':
                    ?>
                        <div class = "alert">
                            <strong>Erreur</strong> Mot De Passe Différent
                         </div>
                    <?php
                    break;

                    case 'email':
                    ?>
                        <div class = "alert">
                            <strong>Erreur</strong> Email Non Valide
                        </div>
                    <?php
                    break;

                    case 'name_length':
                    ?>
                        <div class = "alert">
                            <strong>Erreur</strong> Nom Trop Long
                        </div>
                    <?php
                    break;

                    case 'already':
                    ?>
                        <div class = "alert">
                             <strong>Erreur</strong> Compte Déja Existant
                        </div>
                    <?php
                    break;
                }
            }

        ?>
        <form action = "traitement_insc.php" method = "post">
            <h2 class = "text">Inscription</h2>
            <div class = "form">
                <input type = "text" name = "name" class = "form-field" placeholder="Name" required = "required">
            </div>
            <div class = "form">
                <input type = "email" name = "email" class = "form-field" placeholder="Email" required = "required">
            </div>
            <div class = "form">
                <input type = "password" name = "password" class = "form-field" placeholder="Mot De Passe" required = "required">
            </div>
            <div class = "form">
                <input type = "password" name = "password_retype" class = "form-field" placeholder="Retapez Le Mot De Passe" required = "required">
            </div>
            <div class = "form">
                <button type="submit" class="button"> Inscription</button>
                <a href="connexion.php" type="button" class="btn btn-outline-primary">Connexion</a>
            </div>
        </form>
    </div>
</body>

</html>