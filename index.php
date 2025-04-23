<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebBurst</title>
    <link rel="icon" type="image/jpg" href='css/image/icon.jpg'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <header>
        <?php require_once(__DIR__ . '\nav_bar.php'); ?>
    </header>


    <main>
        <div id="site-presentation">
            <h1 class="welcome">Bienvenue sur mon site</h1>
            <br>
            <h5>Vous découvrirer en visitant ce site différentes fonctionalités.
                Je ne parlerai ni de la navbar responsive ni de notre footer de présentation.
                Je vous laisse la chance de remarquer tout ça par vous-même en espérant que que vous disposer d'une
                bonnne connexion internet.
                Nous espérons que le site vous plaise et nous souhaitons une bonne navigation.
            </h5>
            <br>
            <br>
            <a href="travaux.php"><button class="btn btn-dark"> Tous les formulaires</button></a>
        </div>

    </main>

    <footer>
        <?php include('footer.php') ?>
    </footer>
</body>

</html>