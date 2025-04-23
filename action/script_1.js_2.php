
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/accueil.css">
    <link rel="stylesheet" href="css/exercices.css">
    <script src="script_2.js" defer></script>
    <title>Document</title>
</head>
<body>
    <header>
        <?php 
            require_once(__DIR__. '\nav_bar.php')
        ?>
    </header>
    <main>
        <div class="formulaire">
            <form action="traitement3.php" method="post">
                <p>
                    <h2>Formulaire d'inscription sur notre site</h2>
                    <div class="input-box">
                        <input type="text" name="login" required>
                        <label for="">Login</label>
                    </div>
                    <div class="input-box">
                        <input type="password" name="pass1" id="pass1" required>
                        <label for="">Password</label>
                    </div>
                    <div class="input-box">
                    <input type="password" name="pass2" id="pass2" required>
                    <label for="">Password (vérification)</label>
                    </div>
                    <div class="input-box">
                        <input type="email" name="mail" required>
                        <label for="">Adresse e-mail</label>
                    </div>
                    <div class="ch2">
                        <h2>Vous voulez recevoir la newsletter?</h2>
                        <input type="radio" name="news" value="yes"><label for="news">Oui</label><br/>
                        <input type="radio" name="news" value="no" onClick="alert('Tant pis pour vous!')"><label for="news">Non</label><br/>
                    </div>
                    <button type="submit" class="bt" id="vld">S'incrire</button>
                    <button type="reset"class="bt" id="rst">Effacer</button>
                </p>
            </form>
        </div>
    </main>
</body>
</html>