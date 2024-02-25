<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Films</title>
    <link rel="stylesheet" href="film.css">
</head>

<?php include 'navbar.php'; ?>

<body>
    <h1>Liste des Films</h1>

    <div class="card-container">
        <?php
        include 'database.php';

        $sql = "SELECT * FROM film 
                INNER JOIN genre ON film.id_genre = genre.id_genre 
                INNER JOIN realisateur ON film.id_realisateur = realisateur.id_realisateur";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='film-card'>";
                echo "<div class='film-header'>";
                echo "<h2 class='film-title'>" . $row["titre_film"] . "</h2>";
                echo "</div>";
                echo "<img class='film-poster' src='" . $row["affiche"] . "' alt='Poster du film'>";
                echo "<div class='film-details'>";
                echo "<p><strong>Année de sortie:</strong> " . $row["datesortie"] . "</p>";
                echo "<p><strong>Genre:</strong> " . $row["nom_genre"] . "</p>";
                echo "<p><strong>Réalisateur:</strong> " . $row["prenom"] . " " . $row["nom"] . "</p>";
            
                echo "<a href='infofilm.php?film_id=" . $row['id_film'] . "' class='info-button'>Plus d'infos</a>";
            
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p>Aucun film trouvé dans la base de données.</p>";
        }

        $conn->close();
        ?>
    </div>

    <script defer src="script.js"></script>
</body>

</html>
