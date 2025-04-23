<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exercices.css">
    <script src="js/script_1.js" defer></script>
    <title>Document</title>
</head>
<body>
    <main>
        <div class="formulaire">
            <p>Remplissez ce formulez !</p>
                
                    <div class="s1">
                        <div class="input-box"> 
                            <input type="text" id="nom" required>
                            <label for="nom">Nom</label>
                        </div>
                        <div class="input-box">
                            <input type="number" id="age" required>
                            <label for="nom">Age</label>
                        </div>
                        <div class="input-box">
                            <input type="text" name="ville" id="ville" required>
                            <label for="ville">Ville</label>
                        </div>
                    </div>
                    
                        <button type="submit" class="bt" id="envoyer">Envoyer</button>
        </div>
        <div class="message">
            <p id="msg">En attente</p>
        </div>
    </main>
</body>
</html>