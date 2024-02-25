<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineMax</title>
    <link rel="stylesheet" href="inscription.css">
    <script src="script.js"></script>
</head>
 
<body>
    <div class="vintage__container">
        <p class="vintage vintage__top">CineMax</p>
        <p class="vintage vintage__bot">CineMax</p>
    </div>
 
    <div class="halo">
        <div class="connexion">
            <div class="black-square"></div>
            <form>
                <div class="first">
                <label for="pseudo"></label>
                <input type="text" id="pseudo" name="pseudo" class="pseudo"
                    placeholder="Pseudo" required>
                <label for="nomUtilisateur"></label>
                <input type="text" id="nomUtilisateur" name="nomUtilisateur" class="nomUtilisateur"
                    placeholder="cinemax@gmail.com" required>
     
            </div>
            <div class="second">
                <label for="motDePasse"></label>
                <input type="password" id="motDePasse" name="motDePasse" placeholder="Entrez votre mot de passe" class="motDePasse"
                    required>
            </div>
            <div class="third">
                <input type="submit" value="S'inscrire">
                <br><br>
                <a href="connexion.html" >Se connecter</a>
            </div>
            </form>
        </div>
    </div>
    <div id="root"></div>
 
</body>
 
</html>