<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="fe">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Vanguardistes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
</head>
<body>
    <div id="particles-js" class="background"></div>
    <script src="js-particles/particles.js"></script>
    <script src="js-particles/app.js"></script>
    <script src="js-particles/particles.min.js"></script>
    
    <div class="lignes">
        <div class="l1"></div>
        <div class="l2"></div>
    </div>

    <nav class="connexion">
        <?php 
        if(isset($_SESSION['utilisateur'])){
            echo'<a href="Login/deconnexion.php" class = "btn btn-outline-primary">Déconnexion</a> <br>';
        }
        else{
            echo'<a href="Login/connexion.php" type="button" class="btn btn-outline-primary">Connexion</a>';
        } ?>
    </nav>

    <div class="container-first">
        <h1><span>Soyez </span><span>Eco-résponsable </span><span>Pensez </span><span>à </span><span style="left:38%">Nous </span></h1>
        <div class="container-btns">
            <a href="index.php" class="btn-first b1"> Accueil </a>
            <a href="vendez_mtn.php" class="btn-first b2"> Vendez Maintenant </a>
            <a href="apropos.php" class="btn-first b3"> A Propos</a>
            <a href="contacte.php" class="btn-first b4"> Contactez Nous</a>
            <a href="avis.php" class="btn-first b5"> Avis</a>
            <a href="exp_et_re.php" class="btn-first b6"> Expédition et Retour</a>
        </div>
    </div>

    <img src="Images/THe.png" class="logo">

    
    <div class="step">
        <a id="step0">
             Nous récupérons vos anciens mobiles !
        </a>
        <a id="step1">
            Etape 1: Remplissez le formulaire afin d'estimer votre mobile
            <img src="Images/formulaire.png" alt="" width="100px" height="100px">
        </a>
        <a id="step2">
            Etape 2: Envoyez nous votre télephone
            <img src="Images/courrier.png" alt="" width="100px" height="100px">
        </a>
        <a id="step3">
            Etape 3: Paiements dans un délai de 4 jours maximum
            <img src="Images/pay.png" alt="" width="100px" height="100px">
        </a>
    </div>
    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="js/animation.js"></script>
</body>
</html>