<?php require('header.php'); ?>
    <section class="container-fluid banner">
        <div class="ban">
            <img src="images/image_tel2.jpg" alt="banniere"/>
        </div>
        <div class="inner-banner">
            <h1>Soyez éco-responsable, pensez à nous !</h1>
            <button type="button" class="btn btn-primary btn-lg" id="button-banner">Vendez maintenant !</button>
        </div>
    </section>

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

    </div>
    <script>
        $('.carousel').carousel({

            pause: "null"

        })
    </script>

<h1 class="text2-carousel">En 3 étapes : </h1>

<div class="step">
    <a id="step1">
        Etape 1: Remplissez le formulaire afin d'estimer votre mobile
        <img src="images/formulaire.png" alt="" width="100px" height="100px">
    </a>
    <a id="step2">
        Etape 2: Envoyez nous votre télephone
        <img src="images/courrier.png" alt="" width="100px" height="100px">
    </a>
    <a id="step3">
        Etape 3: Paiements dans un délai de 4 jours maximum
        <img src="images/pay.png" alt="" width="100px" height="100px">
    </a>
</div>

</body>
</html>
