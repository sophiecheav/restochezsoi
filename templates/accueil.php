<?php include "include/head.php" ?>

  <main>
        <div class="container">
            <h1><?php echo $contenuSite["accueil"]["titre"]?></h1>
            <img src="<?php echo $contenuSite["accueil"]["image"] ?>" alt="photo cuisine accueil site" class="index-img">
            <div>
                <?php
                  echo $contenuSite["accueil"]["texte"]
                ?>
            </div>
        <div>
  </main>

  <?php include "include/footer.php" ?>
