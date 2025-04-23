<?php
require "action/connect_database.php";

session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = trim($password); 
    if (empty($email) || empty($password)) {
        echo "Le nom d'utilisateur ou le mot de passe est vide.";
        exit;
    }
    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch();
        if ($password === $user['password']) {
            $userId = $pdo->lastInsertId();
             $_SESSION['user_id'] = $user['user_id'];
             $_SESSION['email'] = $user['email'];
             header("Location: accueil.php");
             exit;
        } else {
            echo "Mot de passe incorrect.";
        }
    } else {
        echo "Nom d'utilisateur incorrect.";
    }
}
?>
