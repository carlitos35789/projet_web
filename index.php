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
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="particles-js" class="background" style="width:100%"></div>
    <script src="js-particles/particles.js"></script>
    <script src="js-particles/app.js"></script>
    <script src="js-particles/particles.min.js"></script>
    
    <div class="lignes">
        <div class="l1"></div>
        <div class="l2"></div>
    </div>

    
    <div class="container-first">
        <h1><span>Soyez </span><span>Eco-résponsable </span><span>Pensez </span><span>à </span><span style="left:38%">Nous </span></h1>
        <nav class="connexion ">
            <?php 
            if(isset($_SESSION['utilisateur'])){
                echo'<a href="Login/deconnexion.php" class = "btn btn-outline-primary">Déconnexion</a> <br>';
            }
            else{
                echo'<a href="Login/connexion.php" type="button" class="btn btn-outline-primary">Connexion</a>';
            } ?>
        </nav>
        <div class="container-btns ">
            <a href="index.php" class="btn-first b1"> Accueil </a>
            <a href="vendez_mtn.php" class="btn-first b2"> Vendez Maintenant </a>
            <a href="apropos.php" class="btn-first b3"> A Propos</a>
            <a href="contacte.php" class="btn-first b4"> Contactez Nous</a>
            <a href="exp_et_re.php" class="btn-first b6"> Expédition et Retour</a>
        </div>
    </div>

    <img src="Images/THe.png" class="logo">

    
    <h1 class="text-carousel">Nous récupérons vos anciens mobiles ! </h1>

<div id="carouselExemple" class="carousel slide" data-ride="carousel" data-interval="5000">

    <ol class="carousel-indicators">
        <li data-target="#carouselExemple" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExemple" data-slide-to="1"></li>
        <li data-target="#carouselExemple" data-slide-to="2"></li>
        <li data-target="#carouselExemple" data-slide-to="3"></li>
        <li data-target="#carouselExemple" data-slide-to="4"></li>
        <li data-target="#carouselExemple" data-slide-to="5"></li>
    </ol>


    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="images/iphone.jpg"
                class="d-block">
        </div>

        <div class="carousel-item">
            <img src="images/samsung.jpg"
                class="d-block">
        </div>

        <div class="carousel-item">
            <img src="images/huawei_tel.png"
            class="d-block">
        </div>

        <div class="carousel-item">
            <img src="images/lg.jpg"
                class="d-block">
        </div>

        <div class="carousel-item">
            <img src="images/motorola.jpg"
            class="d-block">
        </div>

        <div class="carousel-item">
            <img src="images/oppo.jpg"
                class="d-block">
        </div>
    </div>

    <a href="#carouselExemple" class="carousel-control-prev" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="ture"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a href="#carouselExemple" class="carousel-control-next" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

    <script>
        $('.carousel').carousel({

            pause: "null"

        })
    </script>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="js/animation.js"></script>
</body>
</html>