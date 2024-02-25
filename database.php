<?php
$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "cinemax"; 

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

$conn->set_charset("utf8");

?>