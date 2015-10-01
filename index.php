<html>
<?php 


error_reporting(E_ALL);
ini_set('display_erros','1');

require "class/content.php"; 
require "class/session.php";

require "PHPMailer/class.phpmailer.php";

$link = new mysqli(Connexion::SERVER,Connexion::USER,Connexion::PASS,Connexion::BDD);
// $escape = $link->real_escape_string($_POST);

$pdo = new PDO("mysql:host=".Connexion::SERVER.";dbname=".Connexion::BDD,Connexion::USER,Connexion::PASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$connexion = new Connexion();$content = new Content();
$connexion->testMysqli($link);

if(isset($_GET) && isset($_GET['about_us'])){

$description = "Tout sur le groupe Bestial Soul, que ce soit les dernières news, ou les chroniques, ou bien encore leur biographie.";
$title = "Bestial Soul | A propos de nous";
include "include/header.php"; include "include/navbar.php" ?>


<section id="section_aboutus">
  <?php include "include/section_aboutus.php"; ?>
</section>

<?php include "include/footer.php";
			
}
elseif(isset($_GET) && isset($_GET['photos'])){

$description = "Les photos du groupe Bestial Soul classés par artiste: Caroline Rousseau, Anthony Oblin ainsi que diverses photos prises par les fans.";
$title = "Bestial Soul | Photos";
include "include/header.php"; include "include/navbar.php" ?>


<section id="photos">
  <?php include "include/section_photos.php"; ?>
</section>

<?php include "include/footer.php";
      
} 
elseif(isset($_GET) && isset($_GET['videos'])){

$description = "Section videos du site. Sur celle-ci vous pourrez retourvez toutes les videos du groupe mises en ligne par le groupe lui-même, ou bien par PixOFHeaven.";
$title = "Bestial Soul | videos";
include "include/header.php"; include "include/navbar.php" ?>


<section id="videos">
  <?php include "include/section_videos.php"; ?>
</section>
 
<?php include "include/footer.php";

}

elseif (isset($_GET) && isset($_GET['contact'])){

$description = "Ceci est la section contact du site qui vous permez de poser une question à l'administrateur, qui recoit un mail avec le message que vous avez inscrit.";
$title = "Bestial Soul | Contact";
include "include/header.php"; include "include/navbar.php" ?>


<section id="contact">
  <?php include "include/section_contact.php"; ?>
</section>
 
<?php include "include/footer.php";

}

elseif(isset($_GET['accueil'])){

$description = "Accueil du site bestialsoul.com : site officiel du groupe Bestial Soul.";
$title = "Bestial Soul | Accueil";
include "include/header.php"; include "include/navbar.php" ?>


<section id="homepage">
  <?php include "include/section_index.php"; ?>
</section>

<?php include "include/footer.php";
      
}

elseif(empty($_GET) || !isset($_GET) || !isset($_GET['accueil']) || !isset($_GET['photos']) || !isset($_GET['videos']) || !isset($_GET['about_us']) || !isset($_GET['contact'])){

header("Location: index.php?accueil");

} ?>

</body>
</html>	