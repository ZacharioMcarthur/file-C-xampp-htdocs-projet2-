<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Formulaire de stage</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" type="image/jpg" href='css/image/icon.jpg'>

    <!-- CSS -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin-top: 10%;
            margin-bottom: 10%;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            min-width: 320px;
            width: clamp(320px, 40%, 500px);
        }

        fieldset {
            border: none;
            padding: 0;
            margin: 0;
        }

        legend {
            font-size: 1.3rem;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 1rem;
            text-align: center;
        }

        span input[type="text"],
        span input[type="number"],
        span select {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 1rem;
            box-sizing: border-box;
        }

        select[multiple] {
            height: 100px;
        }

        input[type="checkbox"] {
            margin-right: 8px;
        }

        input[type="submit"],
        input[type="reset"] {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            background-color: #2c3e50;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }

        input[type="reset"] {
            background-color: #bdc3c7;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        input[type="submit"]:hover {
            background-color: #1a252f;
        }

        input[type="reset"]:hover {
            background-color: #aeb6bf;
        }
    </style>


</head>

<body>

    <form method="post" action="traitement.php">
        <fieldset>
            <legend>Recherche d’emploi : complétez la fiche</legend>
            <div>
                <span>
                    Nom <input type="text" name="ident[]" /><br />
                    Prénom <input type="text" name="ident[]" /><br />
                    Âge <input type="number" step="1" name="ident[]" /><br /><br />

                    Langues pratiquées<br />
                    <select name="lang[]" multiple="multiple">
                        <option value="français">français</option>
                        <option value="anglais">anglais</option>
                        <option value="allemand">allemand</option>
                        <option value="espagnol">espagnol</option>
                    </select><br /><br />

                    Compétences informatiques<br />
                    HTML 5 <input type="checkbox" name="competent[]" value="HTML 5" />
                    CSS 3 <input type="checkbox" name="competent[]" value="CSS 3" />
                    PHP <input type="checkbox" name="competent[]" value="PHP" />
                    MySQL <input type="checkbox" name="competent[]" value="MySQL" /><br /><br />

                    <input type="reset" value="EFFACER" />
                    <input type="submit" value="ENVOYER" />
                </span>
            </div>
        </fieldset>
    </form>
    <a href="travaux.php"><button  class="btn btn-primary" style="margin-bottom:15%">Tous les Formulaires</button></a>
    <br>
    <a href="form2.php"><button  class="btn btn-dark" style="margin-bottom:15%">Formulaire suivant</button></a>
    <br>
   <br>
</body>

</html>