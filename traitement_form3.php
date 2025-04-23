<?php
require "action/connect_database.php";

session_start();

// Stockage des données du formulaire dans la session
$_SESSION['form_data'] = [
    'lastname' => $_POST['lastname'] ?? '',
    'firstname' => $_POST['firstname'] ?? '',
    'birth' => $_POST['birth'] ?? '',
    'phone_number' => $_POST['phone_number'] ?? '',
    'adress' => $_POST['adress'] ?? '',
    'email' => $_POST['email'] ?? '',
    'profession' => $_POST['profession'] ?? '',
    'other_profession' => $_POST['other_profession'] ?? '',
    'liked' => $_POST['liked'] ?? '',
    'mylevel' => $_POST['mylevel'] ?? '',
    'message' => $_POST['message'] ?? '',
];

// Redirection vers la page d'affichage en carte
header("Location: card_form3.php");
exit;
?>
