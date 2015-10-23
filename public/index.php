<?php 

require "../app/Autoloader.class.php";

use App\Autoloader;
use App\Database;
use App\HTML\Content;

error_reporting(E_ALL);
ini_set('display_erros','1');

Autoloader::register();

$db = new Database();
$content = new Content();

  $light = "id='light'"; 

ob_start();

if (isset($_GET)) {

  switch (key($_GET)) {
    case "accueil":
    $url = "Accueil";
    $description = "Accueil du site bestialsoul.com : site officiel du groupe Bestial Soul.";
    $title = "Bestial Soul | Accueil";
      break;
    case "photos":
    $url = "Photos";
    $description = "Les photos du groupe Bestial Soul classés par artiste: Caroline Rousseau, Anthony Oblin ainsi que diverses photos prises par les fans.";
    $title = "Bestial Soul | Photos";
      break;
    case "videos":
    $url = "Videos";
    $description = "Section videos du site. Sur celle-ci vous pourrez retourvez toutes les videos du groupe mises en ligne par le groupe lui-même, ou bien par PixOFHeaven.";
    $title = "Bestial Soul | videos";
      break;
    case "about_us":
    $url = "A propos de nous";
    $description = "Tout sur le groupe Bestial Soul, que ce soit les dernières news, ou les chroniques, ou bien encore leur biographie.";
    $title = "Bestial Soul | A propos de nous";
      break;
    case "contact":
    $url = "Contact";
    $description = "Ceci est la section contact du site qui vous permez de poser une question à l'administrateur, qui recoit un mail avec le message que vous avez inscrit.";
    $title = "Bestial Soul | Contact";
      break;
    default:
      $url = "Bestial Soul";
      break;
  }

	$page = htmlspecialchars(key($_GET));
  $page = preg_replace("/[^a-z0-9_ ]/i", "", $page);

	if (!@include("../pages/$page.php")) {
		header("Location: index.php?accueil");
	}

}

$content = ob_get_clean();

require "../pages/template/default.php";

?>