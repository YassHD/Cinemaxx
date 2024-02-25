<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Acteurs</title>
    <link rel="stylesheet" href="acteur.css"> 

<?php include 'navbar.php'; ?> 

<body>

    <div class="container">
        <h1>Liste des Acteurs</h1>

        <?php
        include 'database.php';

        $sql = "SELECT nom,prenom,nationalite,daten FROM acteur";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='actor-box'>";
                echo "<h2>" . $row["nom"] . " " . $row["prenom"] . "</h2>";
                echo "<p><strong>Nationalité:</strong> " . $row["nationalite"] . "</p>";
                echo "<p><strong>Date de naissance:</strong> " . $row["daten"] . "</p>";

                echo "</div>";
            }
        } else {
            echo "<p>Aucun acteur trouvé dans la base de données.</p>";
        }

        $conn->close();
        ?>

    </div>

</body>
</html>