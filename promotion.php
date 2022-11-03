<html>
<link rel="stylesheet" href="style.css">
<div class="main">
  <head> 
    <title>PHP Test</title>
  </head>
    
      <body class="mainBg">
        <h1>Promosso??</h1>
        <?php
          // Get the values from the form
          $nominativo = $_POST['nominativo'];
          $nominativo = ucfirst($nominativo);

          if ($_POST['genere'] == "M") {
            echo "$nominativo sei stato promosso con debito in ";
          } else {
            echo "$nominativo sei stata promossa con debito in ";
          }

          if (!empty($_POST["debiti"])) {
            foreach ($_POST["debiti"] as $debito) {
              echo "$debito, ";
            }
          }

          echo "MEGA BRAVO"
        ?>
        <form action="student.php">
          <button class="button" type="submit">Indietro</button>
        </form>
      </body>
</div>
</html>