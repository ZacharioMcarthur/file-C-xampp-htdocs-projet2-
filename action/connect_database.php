<?php
$servername = "localhost";
$username = "root";
$password = "";
$my_database = "my_website";

// Connexion à MySQL
$conn = new mysqli($servername, $username, $password, $my_database);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}
?>
