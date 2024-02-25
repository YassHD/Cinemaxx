<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineMax</title>
    <link rel="stylesheet" href="accueil.css">
    <script src="script.js"></script>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="row">
        <div class="column1">
            <hr class="hrcolumn1">
            <h2>GUESS THE FILM</h2>
            <h1>PIXEL PURSUIT</h1>
            <h3>IDENTIFIEZ LE FILM PIXELISE AVANT SA DEPIXELISATION COMPLETE !</h3>
            <h3>TESTEZ VOS TALENTS DE CINEPHILE</h3>
            <div class="divjouer">
                <button class="buttonjouer">Jouer</button>
            </div>
        </div>
        <div class="column2">
            <section class="film-posters" id="filmPosters">
                <div class="film-poster" id="poster1">
                    <img src="./images/AffichePixelP.png" alt="Pixel Pursuit">
                </div>
                <div class="film-poster" id="poster2">
                    <img src="./images/AfficheCinequiz.png" alt="Cinequiz">
                </div>
                <div class="film-poster" id="poster3">
                    <img src="./images/AfficheCinequiz.png" alt="Cinequiz">
                </div>
            </section>
            <div class="arrows-container">
                <div id="arrowLeft" class="arrow">&#9664;</div>
                <div id="arrowRight" class="arrow">&#9654;</div>
            </div>
        </div>
    </div>
</body>

</html>
