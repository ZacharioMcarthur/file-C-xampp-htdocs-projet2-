<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image/jpg" href='css/image/icon.jpg'>

</head>
<body>
<!--formulaire 1 -->
<?php
require "action/connect_database.php";

if(isset($_POST["ident"], $_POST["lang"], $_POST["competent"])) 
{
    $nom = $_POST["ident"][0];
    $prenom = $_POST["ident"][1];
    $age = $_POST["ident"][2];
    $langues = $_POST["lang"];
    $competences = $_POST["competent"];

    $sql = "INSERT INTO utilisateur (nom, prenom, age) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $nom, $prenom, $age);
    $stmt->execute();
    $user_id = $stmt->insert_id;

    foreach($langues as $langue) {
        $sql = "INSERT INTO parler (id, codlang) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("is", $user_id, $langue);
        $stmt->execute();
    }

    foreach($competences as $competence) {
        $sql = "INSERT INTO competences (libellecomp) VALUES (?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $competence);
        $stmt->execute();
        $competence_id = $stmt->insert_id;

        $sql = "INSERT INTO maitriser (id, numcomp) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $user_id, $competence_id);
        $stmt->execute();
    }

    header("Location: liste.php");
    exit();
}
?>

<!-- formulaire 2 pour le stage-->

<!--voir traitement_form2.phpy-->

<!-- formulaire 3 adhésion à une organisation-->
<!--voir traitement_form3.php-->
</body>
</html>