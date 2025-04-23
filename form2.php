<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        *,::before,::after{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
    background-color: #67add5;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    height: 100vh;
    margin: 0;
    padding: 0;
}
main{
    display: grid;
    place-items: center;
}
.form-container {
    background-color: white;
    margin-top: 10%;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    width: 400px;
    max-width: 90%;
}

h2 {
    text-align: center;
    font-weight: bold;
    color: #34596b;
    margin-bottom: 20px;
}

label#ceo {
    display: block;
    margin-top: 15px;
    font-weight: 600;
    color: #333;
}

input[type="text"],
input[type="date"],
select,
textarea {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 6px;
    background-color: #eaf4fd;
}

.checkbox-group,
.radio-group {
    margin-top: 5px;
    margin-bottom: 15px;
}

input[type="checkbox"],
input[type="radio"] {
    margin-right: 8px;
    margin-bottom: 8px;
}

textarea {
    resize: none;
}

.button-group {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.submit-btn {
    background-color: #007bff;
    color: white;
    font-weight: 600;
    padding: 10px 15px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    flex: 1;
    margin-right: 10px;
}

.reset-btn {
    background-color: #6c757d;
    color: white;
    font-weight: 600;
    padding: 10px 15px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    flex: 1;
}

a button {
    width: 100%;
    margin-top: 15px;
    padding: 10px;
    font-weight: bold;
    border-radius: 6px;
}

    </style>
</head>
<main>
    <main>
    <form method="post" action="traitement_form2.php" class="form-container">
        <h2>Inscription au stage</h2>
    
        <label for="nom" id="ceo">Identité :</label>
        <input type="text" name="nom" placeholder="Nom" required>
        <input type="text" name="prenom" placeholder="Prénom" required>
    
        <label for="naissance" id="ceo">Date de naissance :</label>
        <input type="naissance" name="naissance" required>
    
        <label for="activite" id="ceo">Activité :</label>
        <select name="activite">
            <option value="Collégien">Collégien</option>
            <option value="Lycéen">Lycéen</option>
            <option value="Etudiant">Étudiant</option>
            <option value="Salarié">Salarié</option>
            <option value="Fonctionnaire">Fonctionnaire</option>
            <option value="Patron">Patron</option>
        </select>
    
        <label id="ceo">Qualifications :</label>
        <div  class="checkbox-group">
            <input type="checkbox" name="qualifications" value="bafa"> BAFA
            <input type="checkbox" name="qualifications" value="bafd"> BAFD
            <input type="checkbox" name="qualifications" value="rien"> Rien
        </div>
    
        <label id="ceo">Semaine choisie :</label>
        <div class="radio-group">
            <input type="radio" name="semaine" value="1"> 1ère semaine
            <input type="radio" name="semaine" value="2"> 2ème semaine
            <input type="radio" name="semaine" value="3"> 3ème semaine
        </div>
    
        <label for="motivations" id="ceo">Vos motivations :</label>
        <textarea name="motivations" rows="5" cols="20" placeholder="Expliquez vos motivations..." required></textarea>
    
        <div class="button-group">
            <button type="submit" name="envoi" class="btn submit-btn">Envoyer</button>
            <button type="reset" name="effacer" class="btn reset-btn">Effacer</button>
        </div>
    </form>
</main>
    <a href="travaux.php"><button class="btn btn-primary"  style="margin-bottom:15%">Tous les
    Formulaires</button></a>
<br>
<a href="script_1_js.php"><button class="btn btn-dark" style="margin-bottom:15%">Formulaire
    suivant</button></a>
<br>
<br>
</body>
</html>