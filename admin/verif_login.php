<?php
session_start();

//
// var_dump($_POST);
// exit;

if (isset($_POST["id-mail"]) &&
    isset($_POST["password"]) &&
    // puis que ce sont les bons id
    $_POST["id-mail"] == "sophie.cheavseang@gmail.com" &&
    $_POST["password"] == "nicolas") {

      // je crée une variable de session : si est TRUE, j'ai le droit de me connecter, si est FALSE, je n'ai pas le droit
      $_SESSION["connexion_ok"] = TRUE;

      header("location:bienvenue.php");
      exit;

  } else {
    echo "Identifiant et/ou mot de passe incorrect";
    header("location:connexion.php");
}

?>
