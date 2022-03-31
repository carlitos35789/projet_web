<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style_connexion.css">
</head>
<body>
    <div id="login">
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
            <h3 class = "text-center text-white pt-5">Connexion</h3>
            <div class = "container">
                <input type = "email" name = "email" class = "form-field" placeholder="Email" required = "required">
            </div>
            <div class = "form-group">
                <input type = "password" name = "password" class = "form-field" placeholder="Mot De Passe" required = "required">
            </div>
            <div class = "form">
                <button type="submit" class="btn btn-black"> Connexion</button>
                <p class="btn btn-secondary"><a href="inscription.php">Inscription</a></p>
            </div>
        </form>
        <p class="link-registration"><a href="../index.php">Retour à la page d'acceuil</a></p>
    </div>
</body>
</html> 