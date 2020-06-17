<?php
include "config.php";
include "contenu.php";

// $menu_a_afficher = $contenuSite["menus"]["lundi"];

// si ma clé jour_choisi existe pour la var $contenuSite...
if (isset($contenuSite["menus"][$_GET["jour_choisi"]])) {
  $menu_a_afficher = $contenuSite["menus"][$_GET["jour_choisi"]];
  include $_dossier_template  . "page_menu_du_jour.php";
} else {
  header("Location: $_url_base");
}

//nouvelle URL = jour.php?jour_choisi=mardi
//dans navigation.php indiquer jour.php à la place des pages par jour dans les href
// on indique l'URL totale : jour.php?jour_choisi=mardi etc.
// faire un var_dump($contenuSite) dans navigation.php : affiche le tableau à 2 cases (size=2)
// on veut récupérer la 2e case donc "menus" : $contenuSite["menus"];

// dans navigation.php, faire une boucle qui dit que pour chaque jour, va créer un nouvel URL pour chaque jour...
// foreach ($contenuSite["menus"] as $key => $value) {
//    echo "<li><a href=\"jour.php?jour_choisi=$key\">$key</a></li>"
// }
// puis on efface toutes les balises et liens jour par jour

// essai en créant we à la place de samedi-dimanche et en supprimant "entrée", "plat", "dessert" :
// faire un if isset sur page_menu_du_jour.php dans une balise php après chaque h2 :
// if (isset($menu_a_afficher["entree"])) {
//    echo "$menu_a_afficher[entree]";
