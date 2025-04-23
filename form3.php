<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Adhésion à une organisation</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="icon" type="image/jpg" href='css/image/icon.jpg'>

  <style>
    *,
    ::before,
    ::after {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    body {
      min-height: 100vh;
      font-family: Arial, sans-serif;
      background-color: #6BADD4;
      padding: 20px;
      display: grid;
      place-items: center;
      padding: 0 1rem;
    }

    main {
      padding: 10%;
    }

    .form-container {
      width: 100%;
      max-width: 500px;
      background: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 10px
        /*ombre droite*/
        10px
        /*ombre du bas*/
        14px
        /*ombre du container avec 10px best*/
        rgb(0, 0, 0, 0.1);
      /*box-shadow permet de mettre la div en 3D*/
      overflow: hidden;
      /*hidden pour cacher toutes les imperfections*/
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 20px;
      font-size: clamp(20px, 5vw, 28px);
      text-transform: uppercase;
      font-weight: 900;
      letter-spacing: 2px;
      color: #406880;
    }

    .form-container .items label {
      display: block;
      margin-top: 20px;
      font-size: clamp(12px, 2vw, 18px);
    }

    form .news {
      display: flex;
      flex-flow: row nowrap;
      justify-content: space-between;
    }

    form .name-news {
      width: 48%;
    }

    form .inline {
      display: flex;
      flex-direction: row;
      justify-content: space-around;
    }

    form .inline input {
      height: 10px;
      width: 10px;
    }

    input,
    textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
      box-sizing: border-box;
      background-color: aliceblue;
    }

    input:focus,
    textarea:focus {
      border: 1px solid #8283E3;
    }

    form textarea {
      height: 120px;
      resize: none;
    }

    form button[type="submit"] {
      cursor: pointer;
      border: none;
      width: 100%;
      padding: 12px;
      background-color: #007BFF;
      color: white;
      border: none;
      margin-top: 20px;
      border-radius: 5px;
    }

    form button[type="submit"]:hover {
      background-color: #0056b3;
      color: aliceblue;
    }

    form button[type="reset"] {
      cursor: pointer;
      border: none;
      width: 100%;
      padding: 12px;
      background-color: #C9C9C9;
      border: none;
      margin-top: 20px;
      border-radius: 5px;
    }

    form button[type="reset"]:hover {
      background-color: rgba(128, 128, 128, 0.978);
      color: azure;
    }
  </style>
</head>

<main>
  <div class="form-container">
    <h2>Adhésion à l'assossiation</h2>
    <form id="contactForm" action="traitement_form3.php" method="POST">
      <div class="news">
        <div class="name-news">
          <label for="lastname">Nom :</label>
          <input type="text" id="lastname" name="lastname" placeholder="lastname" required>
        </div>
        <div class="name-news">
          <label for="firstname">Prenom :</label>
          <input type="text" id="firstname" name="firstname" placeholder="firstname" required>
        </div>
      </div>
      <div class="items">
        <label for="birth">Date de naissance :</label>
        <input type="date" id="birth" name="birth" placeholder="name" required>
      </div>


      <div class="items">
        <label for="phone_number">Téléphone :</label>
        <input type="tel" id="phone_number" name="phone_number" placeholder="10 number example: 0195958585" required pattern="[0-9]{10}"
          title="veuillez entrer numero à 10 chiffres">
      </div>

      <div class="items">
        <label for="adress">Adresse :</label>
        <input type="text" id="adress" name="adress" placeholder="adress" required>
      </div>

      <br>

      <div class="items">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" pattern="[a-z,.]{4,30}@(hotmail|yahoo|gmail)\.(fr|com|bj|[a-z]{2,})"
          title="veuillez entrer une adresse e-mail valide avec au moins 10 caractères avant le'@', utlisant les domaines hotmail,gamail ou yahoo, et les extensions fr, com, bj ou toutes les autres extensions de deux lettres"
          placeholder="yourname@gmail.com" required>

      </div>
      <br>

      <div class="inline">


        <label for="profession">Profession :</label>
        <select id="profession" name="profession" pattern="select" required>
          <option value="nothing" pattern=" "></option>

          <optgroup label="Santé - Médecine">
            <option value="medecin_generaliste">Médecin généraliste</option>
            <option value="chirurgien">Chirurgien</option>
            <option value="psychiatre">Psychiatre</option>
          </optgroup>

          <optgroup label="Santé - Soins infirmiers">
            <option value="infirmier">Infirmier(ère)</option>
            <option value="aide_soignant">Aide-soignant(e)</option>
            <option value="sage_femme">Sage-femme</option>
          </optgroup>

          <optgroup label="Santé - Paramédical">
            <option value="kinesitherapeute">Kinésithérapeute</option>
            <option value="orthophoniste">Orthophoniste</option>
            <option value="ergotherapeute">Ergothérapeute</option>
          </optgroup>

          <optgroup label="Technologies - Développement">
            <option value="dev_web">Développeur web</option>
            <option value="dev_mobile">Développeur mobile</option>
            <option value="ingenieur_logiciel">Ingénieur logiciel</option>
          </optgroup>

          <optgroup label="Technologies - Réseaux et sécurité">
            <option value="admin_sys">Administrateur systèmes</option>
            <option value="ingenieur_reseau">Ingénieur réseau</option>
            <option value="expert_cybersecurite">Expert cybersécurité</option>
          </optgroup>

          <optgroup label="Technologies - Données et IA">
            <option value="data_analyst">Data analyst</option>
            <option value="data_scientist">Data scientist</option>
            <option value="ia_engineer">Ingénieur IA</option>
          </optgroup>

          <optgroup label="Éducation - Enseignement">
            <option value="prof_ecole">Professeur des écoles</option>
            <option value="enseignant_secondaire">Enseignant collège/lycée</option>
            <option value="maitre_conference">Maître de conférence</option>
          </optgroup>

          <optgroup label="Éducation - Accompagnement">
            <option value="educateur">Éducateur spécialisé</option>
            <option value="conseiller_orientation">Conseiller d’orientation</option>
            <option value="formateur">Formateur professionnel</option>
          </optgroup>

          <optgroup label="BTP - Construction">
            <option value="macon">Maçon</option>
            <option value="charpentier">Charpentier</option>
            <option value="chef_chantier">Chef de chantier</option>
          </optgroup>

          <optgroup label="BTP - Ingénierie">
            <option value="architecte">Architecte</option>
            <option value="ingenieur_civil">Ingénieur génie civil</option>
            <option value="conducteur_travaux">Conducteur de travaux</option>
          </optgroup>

          <optgroup label="Arts et Médias - Création">
            <option value="designer">Designer graphique</option>
            <option value="illustrateur">Illustrateur</option>
            <option value="realisateur">Réalisateur</option>
          </optgroup>

          <optgroup label="Arts et Médias - Communication">
            <option value="journaliste">Journaliste</option>
            <option value="redacteur_web">Rédacteur web</option>
            <option value="attaché_presse">Attaché de presse</option>
          </optgroup>

          <optgroup label="Arts et Médias - Spectacle">
            <option value="acteur">Acteur / Actrice</option>
            <option value="musicien">Musicien(ne)</option>
            <option value="technicien_son">Technicien du son</option>
          </optgroup>

          <optgroup label="Droit et Justice - Juridique">
            <option value="avocat">Avocat</option>
            <option value="notaire">Notaire</option>
            <option value="juriste">Juriste</option>
          </optgroup>

          <optgroup label="Droit et Justice - Justice">
            <option value="juge">Juge</option>
            <option value="greffier">Greffier</option>
            <option value="huissier">Huissier de justice</option>
          </optgroup>

          <optgroup label="Finance - Banque">
            <option value="conseiller_bancaire">Conseiller bancaire</option>
            <option value="analyste_financier">Analyste financier</option>
            <option value="trader">Trader</option>
          </optgroup>

          <optgroup label="Finance - Comptabilité">
            <option value="comptable">Comptable</option>
            <option value="expert_comptable">Expert-comptable</option>
            <option value="auditeur">Auditeur</option>
          </optgroup>

          <optgroup label="Commerce - Vente">
            <option value="vendeur">Vendeur</option>
            <option value="responsable_magasin">Responsable magasin</option>
            <option value="commercial">Commercial</option>
          </optgroup>

          <optgroup label="Commerce - Marketing">
            <option value="chef_produit">Chef de produit</option>
            <option value="community_manager">Community manager</option>
            <option value="responsable_marketing">Responsable marketing</option>
          </optgroup>

        </select>
      </div>

      <input type="text" id="other_profession" name="other_profession" placeholder="Si autre, précisez" required>

      <br>
      <br>
      <div class="inline">
        <label for="liked">Centres d'intérêt :</label>
        <select id="liked" name="liked" pattern="select" required>
          <option value="nothing" pattern=" "></option>
          <option value="lecture">Lecture(romans, mangas, comics,...)</option>
          <option value="langue">Apprendre une langue</option>
          <option value="instrument">Apprendre à jouer d'un instrument</option>
          <option value="ecriture">Ecriture</option>
          <option value="dessin">Dessin</option>
          <option value="cuisine">Cuisine</option>
          <option value="bricolage">Bricolage</option>
          <option value="peinture">Peinture</option>
          <option value="sport">Sport</option>
          <option value="jeux-videos">Jeux-vidéos</option>
          <option value="films-series">Films et série</option>
        </select>
      </div>
      <br>
      <br>
      <div class="inline">
        <h5>Niveau:</h5>
        <div class="inline">
          <input type="radio" name="mylevel"><label for="mylevel">Facile</label>
        </div>
        <div class="inline">
          <input type="radio" name="mylevel"><label for="mylevel">Normal</label>
        </div>
        <div class="inline">
          <input type="radio" name="mylevel"><label for="mylevel">Difficile</label>
        </div>
      </div>
      <br>
      <div class="items">
        <label for="message">Vos motivations :</label>
        <textarea id="message" name="message"placeholder="motivations"  required></textarea>
      </div>


      <button type="submit">Envoyer</button>
      <button type="reset">Annuler</button>
    </form>
  </div>
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
