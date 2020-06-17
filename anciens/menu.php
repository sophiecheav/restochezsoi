<?php include 'config.php' ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title><?php echo $nomresto ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <main>

      <div id="nav-haut">
        <?php include 'navigation.php'; ?>
      </div>

      <h1>Resto'ChezSoi</h1>
      <h2>Le restaurant des confiné.e.s</h2>

      <div class="container">
        <h3><?php echo $titre ?></h3>
      </div>

      <div class="container">
        <p><?php echo $contenu ?></p>
      </div>

      <?php include 'footer.php'; ?>

      <div class="" id="nav-bas">
        <?php include 'navigation.php'; ?>
      </div>


    </main>

  </body>
</html>
