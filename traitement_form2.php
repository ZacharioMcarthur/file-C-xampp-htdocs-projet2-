<?php
require "action/connect_database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'] ?? '';
    $prenom = $_POST['prenom'] ?? '';
    $naissance = $_POST['naissance'] ?? '';
    $activite = $_POST['activite'] ?? '';
    $qualifications = isset($_POST['qualifications']) ? implode(", ", $_POST['qualifications']) : '';
    $semaine = $_POST['semaine'] ?? '';
    $motivations = $_POST['motivations'] ?? '';
    $date_inscription = date("Y-m-d");

    $stmt = $conn->prepare("INSERT INTO candidats (nom, prenom, naissance, activite, qualifications, semaine, motivations, date_inscription) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $nom, $prenom, $naissance, $activite, $qualifications, $semaine, $motivations, $date_inscription);
    $stmt->execute();

    header("Location: liste_form2.php");
    exit();
}
?>
