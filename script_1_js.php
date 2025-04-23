<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/jpg" href='css/image/icon.jpg'>

  <style>
    main {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: #222;
      color: gray;
      font-family: sans-serif;
      flex-direction: column;
 
    }

    main .cercle {
      width: 150px;
      margin-top: 20%;
      height: 150px;
      background: gray;
      color: #222;
      border-radius: 50%;
      display: grid;
      place-items: center;
      cursor: pointer;
      transition: .2s;
    }

    main button {
      margin-top: 20px;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
    }
  </style>
</head>

<body>
<header>
        <?php require_once(__DIR__ . '\nav_bar.php'); ?>
    </header>

  <main>
  <div class="cercle" id="cercle">click me</div>
  <br>
  <br>
  <div id="count">Vous avez cliqué 0 fois</div>
  <button onclick="reset()">Recommencer</button>
  <script>
    let n = 0,
      cercle = document.getElementById("cercle"), count = document.getElementById("count");
    cercle.onclick = () => {
      count.textContent = `Vous avez cliqué ${++n} fois`;
      cercle.style.transform = "scale(1.2)";
      setTimeout(() => cercle.style.transform = "", 150);
    };
    function reset() { n = 0; count.textContent = `Vous avez cliqué ${n} fois`; }
  </script>
  </main>
 
  
</body>

</html>