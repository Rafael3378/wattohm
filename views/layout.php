<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wattohm</title>
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/reset.css">
</head>
<body>
<header>
    <label for="checkbox" id="label_checkbox"></label>
    <input type="checkbox" id="checkbox"/>
    <nav class="nav">
        <a href="/">Accueil</a>
        <a href="#description">Qui sommes nous ?</a>
        <a href="gallery">Nos dernieres realisations</a>
        <a href="job">Nos offres d'emplois</a>
        <a href="contact">Nous contacter</a>
    </nav>
    <section class="intro">
        <div class="overlay_intro">
            <h1>Wattohm</h1>
                <p>Société d'électricité générale en Ile de France</p></div>
    </section>       
</header>
    <div class="container">
        <?= $content ?>
    </div>
<Footer class="footer">
    <h2>Médias sociaux</h2>
    <nav>
        <ul class="nav_media">
            <a href="#"><img class="facebook" src="/public/images/facebook-770688_1280.webp" alt="facebook"/></a>
            <a href="#"><img class="linkedin" src="/public/images/unnamed.png" alt="linkedin"/></a>
            <a href="#"><img class="instagram" src="/public/images/téléchargement.jfif" alt="instagram"/></a>
        </ul>
    </nav>
    <p>06 06 06 06 06 <br> N° SIRET : 888 888 888 <br> Copyright Mentions legales</p>
</Footer>
<script src="./js/carousel.js"></script>
</body>
</html>