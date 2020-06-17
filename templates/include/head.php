<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($title_page) ? $title_page : strtoupper($nom_du_resto) . " - Restaurant" ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_url_base . $_dossier_template ?>css/style.css" />
</head>

<body>
<header>

  <div id="nav-haut">
    <?php include 'navigation.php'; ?>
  </div>

</header>
