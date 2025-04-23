<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste des Candidats</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" type="image/jpg" href='css/image/icon.jpg'>
    <style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background: url(css/image/1.jpg) no-repeat center center fixed;
        background-size: cover;
    }
    main {
        padding: 140px;
        color: white;
    }
    h2 {
        text-align: center;
        margin-bottom: 30px;
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
$sql = "SELECT * FROM candidats ORDER BY id DESC";
$result = $conn->query($sql);
?>

<h2>Liste des Candidats</h2>
<table>
    <tr>
        <th>#ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Date Naissance</th>
        <th>Activité</th>
        <th>Qualifications</th>
        <th>Semaine</th>
        <th>Motivations</th>
        <th>Date Inscription</th>
    </tr>

<?php
while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['nom']}</td>
        <td>{$row['prenom']}</td>
        <td>{$row['naissance']}</td>
        <td>{$row['activite']}</td>
        <td>{$row['qualifications']}</td>
        <td>{$row['semaine']}</td>
        <td>{$row['motivations']}</td>
        <td>{$row['date_inscription']}</td>
    </tr>";
}
?>
</table>

<div class="buttons">
    <button class="btn btn-red" style="color:white" onclick="window.print()">Print</button>
    <a href="form1.php"><button class="btn" style="color:white">Add User</button></a>
</div>
</main>
<footer>
    <?php include('footer.php'); ?>
</footer>
</body>
</html>
