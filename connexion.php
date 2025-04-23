<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/connexion.css">
    <script src="js/connexion.js" defer></script>
    <title>Document</title>
</head>

<body>
    <header>

    </header>
    <main>
        <div class="main-container">
            <div class="connexion">
                <form action="traitement_connexion.php">
                    <p>
                    <h2>Se connecter</h2>
                    <div class="input-box">
                        <input type="email" name="email" required><label for="email">Email</label>
                    </div>
                    <div class="input-box">
                        <input type="password" name="passwd" required><label for="passwd">Mot de passe</label>
                    </div>
                    <button type="submit" name="submit">Se connecter</button>
                    <p id="reg-link">Vous êtes nouveau? <a href="#">S'inscrire</a></p>
                    </p>
                </form>
            </div>
            <div class="inscription">
                <form action="traitement_inscription.php">
                    <h2>S'inscrire</h2>

                    <div class="input-box">
                        <input type="text" required><label for="">Nom d'utilisateur</label>
                    </div>
                    <div class="input-box">
                        <input type="email" required><label for="">Email</label>
                    </div>
                    <div class="input-box">
                        <input type="password" required><label for="">Mot de passe</label>
                    </div>
                    <div class="input-box">
                        <input type="password" required><label for="">Confirmez le mot de passe</label>
                    </div>

                    <button type="submit">S'inscrire</button>
                    <p id="log-link">Vous avez déjà un compte? <a href="#">Se connecter</a></p>
                </form>
            </div>

    </main>
</body>

</html>