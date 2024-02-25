<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information sur le Film</title>
    <link rel="stylesheet" href="film.css">
</head>

<?php include 'navbar.php'; ?>

<body>
    <h1>Information sur le Film</h1>

    <div class="film-info">
        <?php
        include 'database.php';

        // Vérifier si l'ID du film est présent dans l'URL
        if (isset($_GET['film_id'])) {
            $film_id = $_GET['film_id'];

            // Sélectionner les informations du film en fonction de l'ID
            $sql = "SELECT * FROM film 
                    INNER JOIN genre ON film.id_genre = genre.id_genre 
                    INNER JOIN realisateur ON film.id_realisateur = realisateur.id_realisateur
                    WHERE film.id_film = $film_id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo "<div class='film-card'>";
                echo "<div class='film-header'>";
                echo "<h2 class='film-title'>" . $row["titre_film"] . "</h2>";
                echo "</div>";
                echo "<img class='film-poster' src='" . $row["affiche"] . "' alt='Poster du film'>";
                echo "<div class='film-details'>";
                echo "<p><strong>Année de sortie:</strong> " . $row["datesortie"] . "</p>";
                echo "<p><strong>Genre:</strong> " . $row["nom_genre"] . "</p>";
                echo "<p><strong>Réalisateur:</strong> " . $row["prenom"] . " " . $row["nom"] . "</p>";
                echo "</div>";
                echo "</div>";
            } else {
                echo "<p>Aucune information trouvée pour ce film.</p>";
            }
        } else {
            echo "<p>Aucun identifiant de film fourni.</p>";
        }

        $conn->close();
        ?>
    </div>

    <script defer src="script.js"></script>
</body>

</html>