<html>
<link rel="stylesheet" href="style.css">
<div class="main">
  <head> 
    <title>PHP Test</title>
  </head>
    
      <body class="mainBg">
        <h1>Debiti Calculator2000</h1>
        <div class="center">
          <form action="result.php" method="post">
            <label for="nominativo">Nominativo</label>
            <input class="input" type="text" id="inputNominativo" name="nominativo" placeholder="Nominativo"><br><br>
            <label for="genere">Genere</label>
            <select class="input" id="inputGenere" name="genere">
              <option value="M">M</option>
              <option value="F">F</option>

            <button class="button" type="submit">Calcola</button>
          </form>
        </div>
      </body>
</div>
</html>