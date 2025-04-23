<?php
session_start();
$data = $_SESSION['form_data'] ?? null;

if (!$data) {
    echo "Aucune donnée trouvée. Veuillez remplir le formulaire.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Résumé de l'adhésion</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
   body {
      background-color: #f0f8ff;
    }
    main{
      padding-top: 2%;
      padding-left: 30%;

    }
    .card {
      width: 100%;
      max-width: 600px;
    }
    .bouton  .btn.btn-dark{
      margin-left: 270px;
    }
  </style>
</head>
<body>
<main>
<div class="card shadow">
  <div class="card-body">
    <h3 class="card-title text-center mb-4">Fiche d'adhésion</h3>
    <p><strong>Nom :</strong> <?= htmlspecialchars($data['lastname']) ?></p>
    <p><strong>Prénom :</strong> <?= htmlspecialchars($data['firstname']) ?></p>
    <p><strong>Date de naissance :</strong> <?= htmlspecialchars($data['birth']) ?></p>
    <p><strong>Téléphone :</strong> <?= htmlspecialchars($data['phone_number']) ?></p>
    <p><strong>Adresse :</strong> <?= htmlspecialchars($data['adress']) ?></p>
    <p><strong>Email :</strong> <?= htmlspecialchars($data['email']) ?></p>
    <p><strong>Profession :</strong> <?= htmlspecialchars($data['profession']) ?> <?= !empty($data['other_profession']) ? '(' . htmlspecialchars($data['other_profession']) . ')' : '' ?></p>
    <p><strong>Centre d'intérêt :</strong> <?= htmlspecialchars($data['liked']) ?></p>
    <p><strong>Niveau :</strong> <?= htmlspecialchars($data['mylevel']) ?></p>
    <p><strong>Motivations :</strong><br><?= nl2br(htmlspecialchars($data['message'])) ?></p>
  </div>
</div>
<br>
<div class="bouton">
<a href="travaux.php"><button class="btn btn-primary"  style="margin-bottom:15%">Tous les
    Formulaires</button></a>
<a href="script_1_js.php"><button class="btn btn-dark" style="margin-bottom:15%">Formulaire
    suivant</button></a>
</div>

</main>
<footer><?php include('footer.php') ?></footer>
</body>
</html>
  <!---->
<?php
#pjpzzmnerori
/* */
///

?>