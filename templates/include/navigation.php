<nav>
  <ul>
    <li><a href="index.php">Accueil</a></li>

    <?php
      foreach ($contenuSite["menus"] as $key => $value) {
        echo "<li><a href=\"jour.php?jour_choisi=$key\"</a>$key</li>";
      }
     ?>

  </ul>
</nav>
