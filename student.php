<html>
<link rel="stylesheet" href="style.css">
<div class="main">
  <head> 
    <title>PHP Test</title>
  </head>
    
      <body class="mainBg">
        <h1>Debiti Calculator2000</h1>
        <div>
          <form action="promotion.php" method="post">
            <label for="nominativo">Nominativo:</label>
            <input class="input" type="text" id="inputNominativo" name="nominativo" placeholder="Nominativo"><br><br>
            <div class="flexRow">
              <label for="genere">Genere:</label>
              <input class="checkbox" type="radio" name="genere"> M
              <input class="checkbox" type="radio" name="genere"> F 
            </div>

            <div class="flexRow">
              <label for="debiti">Debiti:</label>
              <input class="checkbox" type="checkbox" name="debiti[]" value="Italiano"> Ita
              <input class="checkbox" type="checkbox" name="debiti[]" value="Matematica"> Mat
              <input class="checkbox" type="checkbox" name="debiti[]" value="Telecomunicazioni"> Tel
              <input class="checkbox" type="checkbox" name="debiti[]" value="Informatica"> Inf
            </div>

            <button class="button" type="submit">Esito scrutinio</button>
          </form>
        </div>
      </body>
</div>
</html>