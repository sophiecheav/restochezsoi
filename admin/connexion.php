<?php
session_start();
include "../config.php";
// include "../templates/include/navigation.php";

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Resto'ChezSoi | Connexion</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../templates/css/style.css">
  </head>

  <body>

    <h1>Espace admin | Connexion</h1>

    <form class="connect-form" method="post" action="verif_login.php" >

      <div class="">
        <label for="id-mail">Votre identifiant mail</label>
        <input type="text" name="id-mail" value="">
      </div>

      <div class="">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" value="">
      </div>

      <div class="connect-btn">
        <button type="submit" name="button">Valider</button>
      </div>
    </form>

<?php

include "../templates/include/footer.php" ?>

  </body>
</html>
