<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <div class="login">
    <?php
        if(isset($_GET['login_err'])){
            $error = htmlspecialchars($_GET['login_err']);

            switch($error){
                case 'password':
                    ?>
                    <div class = "alert"> 
                        <strong>Erreur</strong> Mot De Passe Incorrect
                    </div>
                <?php
                break;

                case 'email':
                    ?>
                    <div class = "alert"> 
                        <strong>Erreur</strong> Email Incorrect
                    </div>
                <?php
                break;

                case 'already':
                    ?>
                    <div class = "alert"> 
                        <strong>Erreur</strong> Compte Non Existant
                    </div>
                <?php
                break;
            }
        }
        ?>
        <form action = "connexion.php" method = "post">
            <h2 class = "text">Connexion</h2>
            <div class = "form">
                <input type = "email" name = "email" class = "form-field" placeholder="Email" required = "required">
            </div>
            <div class = "form">
                <input type = "password" name = "password" class = "form-field" placeholder="Mot De Passe" required = "required">
            </div>
            <div class = "form">
                <button type="submit" class="button"> Connexion</button>
            </div>
        </form>
        <p class="link-registration"><a href="inscription.php">Inscription</a></p>
        <p class="link-registration"><a href="../index.php">Retour à la page d'acceuil</a></p>
    </div>
</body>
</html> 