<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/travaux.css">
    <link rel="icon" type="image/jpg" href='css/image/icon.jpg'>

    <script src="js/script.js" defer></script>
    <title>Document</title>
</head>

<body>
    <header>
        <?php require_once(__DIR__ . '/nav_bar_travaux.php'); ?>
    </header>

    <main>

        <div class="dots"></div>

        <div class="conteneur">
            <div class="case">
                <img src="css/image/img1.jpg" alt="photo 1" />
                <h3>Formulaire 1</h3>
                <p>Recherche d'emploi</p>
                <a href="form1.php">open</a>
            </div>
            <div class="case">
                <img src="css/image/img2.jpg" alt="photo 2" />
                <h3>Formulaire 2</h3>
                <p>Le formulaire de demande <br> de stage.</p>
                <a href="form2.php">open</a>
            </div>
            <div class="case">
                <img src="css/image/img3.jpg" alt="photo 3" />
                <h3>Formulaire 3</h3>
                <p>Le formulaire d'adhésion à
                    <br> une association.
                </p>
                <a href="form3.php">open</a>
            </div>
            <div class="case">
                <img src="css/image/img4.jpg" alt="photo 4" />
                <h3>Script js</h3>
                <p>Teste ta vitesse de click</p>
                <a href="script_1_js.php">open</a>
            </div>

    </main>
    <footer>
        <?php
        require_once(__DIR__ . '/footer.php')
            ?>
    </footer>
</body>

</html>