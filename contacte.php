<?php 
session_start();
require('header.php');
?>

<link rel="stylesheet" href="css/style_contacte.css">
<body>
    <main>
        <header>
        </header>
        <form action="" method="get">
            <div class="page" id="page1">
                <h1>Qui etes-vous ?</h1>
                <div>
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom">
                </div>
                <div>
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom">
                </div>
                <button class="btn btn-primary next" type="button">Suivant</button>
            </div>
            <div class="page" id="page2">
                <h1>Vos informations</h1>
                <div>
                    <label for="email">E-mail </label>
                    <input type="text" id="email" name="email">
                </div>
                <div>
                    <label for="adresse">Adresse :</label>
                    <input type="text" id="adresse" name="adresse">
                </div>
                <div>
                    <label for="code_postal">Code postal :</label>
                    <input type="text" id="code_postal" name="code_postal">
                </div>
                <div>
                    <label for="ville">Ville :</label>
                    <input type="text" id="ville" name="ville">
                </div>
                <div>
                    <label for="tel">Numéro de téléphone </label>
                    <input type="text" id="tel" name="tel">
                </div>
                <button class=" btn btn-primary prev" type="button">Précédent</button>
                <button class="btn btn-primary next" type="button">Suivant</button>
            </div>
            <div class="page" id="page3">
                <h1>Votre message</h1>
                <div>
                    <label for="message">Tapez votre message :</label>
                    <input type="text" id="message" name="message">
                </div>
                <button class="btn btn-primary prev" type="button">Précédent</button>
                <button class="btn btn-primary">Terminer</button>
            </div>
        </form>
    </main>

    <script src="js/scripts.js"></script>
</body>
</html>