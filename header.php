<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>The Vanguardistes</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link rel="shortcut-icon" href="images/THe.png" type="image/x-icon">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <link rel="stylesheet" href="css/custom.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous">
        </script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous">
        </script>
    </head>
    <div id="particles-js" class="background"></div>
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    <script src="js/particles.min.js"></script>

    <body>
        <header>
            <div class="navbar">
                <nav class="menu">
                    <img id="logo"src="images/THe.png" alt="" width="200px" height="100px">
                    <a href="index.php" type="button" class="btn btn-primary btn-lg">Accueil</a>
                    <a href="apropos.php" type="button" class="btn btn-outline-primary">A Propos</a>
                    <a href="contactez.php" type="button" class="btn btn-outline-primary">Contactez Nous</a>
                    <a href="avis.php" type="button" class="btn btn-outline-primary">Avis</a>
                    <a href="exp_et_re.php" type="button" class="btn btn-outline-primary">Expédition Et Retour</a>
                </nav>
                <nav class="connexion">
                    <?php 
                    if(isset($_SESSION['utilisateur'])){
                        echo'<a href="Login/deconnexion.php" class = "btn btn-outline-primary">Déconnexion</a> <br>';
                    }
                    else{
                        echo'<a href="Login/connexion.php" type="button" class="btn btn-outline-primary">Connexion</a>';
                    } ?>
                </nav>
            </div>
        </header>
