<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" type="image/jpg" href='css/image/icon.jpg'>
    <style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background: url(css/image/1.jpg) no-repeat center center fixed;
        background-size: cover;
        
    }
    main{
        padding: 140px;
        color: white;
    }
    h2 {
        text-align: center;
        margin-bottom: 30px;
        color: white;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: rgba(255, 255, 255, 0.05);
        box-shadow: 0 0 10px rgba(0,0,0,0.5);
        border-radius: 10px;
        overflow: hidden;
    }

    th, td {
        padding: 15px;
        text-align: center;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    th {
        background-color: #6BADD4;
        color: white;
        font-weight: bold;
        text-transform: uppercase;
    }

    tr:nth-child(even) {
        background-color: rgba(255, 255, 255, 0.03);
    }

    tr:hover {
        background-color: rgba(107, 173, 212, 0.2);
    }

    .buttons {
        margin-top: 20px;
        text-align: center;
    }

    .btn {
        background-color: #6BADD4;
        color: white;
        border: none;
        padding: 10px 20px;
        margin: 5px;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #5396bb;
    }

    .btn-red {
        background-color: #dc3545;
    }

    .btn-red:hover {
        background-color: #bb2d3b;
    }
</style>

</head>
<body>
    
<main>
    
<?php
require "action/connect_database.php";

$sql = "SELECT utilisateur.id, nom, prenom, age, 
               GROUP_CONCAT(DISTINCT langues.libellelang SEPARATOR ', ') AS langues,
               GROUP_CONCAT(DISTINCT competences.libellecomp SEPARATOR ', ') AS competences
        FROM utilisateur
        LEFT JOIN parler ON utilisateur.id = parler.id
        LEFT JOIN langues ON parler.codlang = langues.codlang
        LEFT JOIN maitriser ON utilisateur.id = maitriser.id
        LEFT JOIN competences ON maitriser.numcomp = competences.numcomp
        GROUP BY utilisateur.id";

$result = $conn->query($sql);
?>

<h2>Liste d'Enregistrement des Candidats.</h2>
<table>
    <tr>
        <th>#id</th>
        <th>#Nom</th>
        <th>#Prénom</th>
        <th>#Âge</th>
        <th>#Langues</th>
        <th>#Compétences</th>
    </tr>

    <?php
    $i = 1;
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$i."</td>
                <td>".$row['nom']."</td>
                <td>".$row['prenom']."</td>
                <td>".$row['age']."</td>
                <td>".$row['langues']."</td>
                <td>".$row['competences']."</td>
              </tr>";
        $i++;
    }
    ?>
</table>

<div class="buttons">
    <button class="btn btn-red" style="background-color: #6BADD4" onclick="window.print()"> Print</button>
    <a href="form1.php" target="content"><button class="btn btn-prmary" style="background-color: crimson;">Add user</button></a>
</div>
</main>
<footer>
    <?php include('footer.php') ?>
</footer>
        
</body>
</html>