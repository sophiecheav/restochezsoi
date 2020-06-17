<?php
session_start();

include "../config.php";
// include "../templates/include/navigation.php";

if (empty($_SESSION["connexion_ok"])) {
  header("location:connexion.php");
}

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Resto'ChezSoi | Espace admin</title>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;600;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../templates/css/style.css">
</head>

  <body>

    <h1>Bienvenue dans votre espace admin</h1>


    <?php

    include "../templates/include/footer.php"

    ?>

  </body>
</html>
