<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.cdnfonts.com/css/nats');

        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style: none;
        }

        header {
            width: 100vh;

        }

        body {
            font-family: 'NATS', sans-serif;
            font-size: x-large;
        }

        .navbar {
            position: relative;
            padding: 20px 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            box-sizing: border-box;
            z-index: 1000
        }

        .navbar a {
            color: white;
            font-weight: 600;
        }

        .navbar .logo {
            max-height: 100%;
            width: 15%;
        }

        .navbar .nav-links ul {
            display: flex;
        }

        .navbar .nav-links ul li {
            margin: 0 25px;
        }

        .navbar .nav-links ul li:hover a {
            text-decoration: underline orange;
        }
    </style>
    <title>CineMax</title>
</head>

<body>

    <nav class="navbar">
        <img class="logo" src="./images/CineMax_Logo.png" alt="Logo CineMax">
        <div class="nav-links">
            <ul>
                <li class="active"><a href="accueil.php">ACCUEIL</a></li>
                <li><a href="film.php">FILMS</a></li>
                <li><a href="acteur.php">ACTEURS</a></li>
                <li><a href="connexon.php">CONNEXION</a></li>




            </ul>
        </div>
    </nav>
    <header></header>

</body>

</html>