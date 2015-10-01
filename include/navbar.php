<?php 

  switch (key($_GET)) {
    case "accueil":
      $url = "Accueil";
      break;
    case "photos":
      $url = "Photos";
      break;
    case "videos":
      $url = "Videos";
      break;
    case "about_us":
      $url = "A propos de nous";
      break;
    case "about_us&chroniques":
      $url = "A propos de nous / Chroniques";
      break;
    case "contact":
      $url = "Contact";
      break;
    default:
      $url = "Bestial Soul";
      break;
  }

  $light = "id='light'"; 

?>


<body id="<?php echo 'background_'.rand(1,5); ?>">
  <img class="logo" src="img/Logo.png" />
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php  "index.php?$_GET" ?>" ><?php echo $url ?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a <?php if(isset($_GET['accueil'])){ echo $light; } ?> href="index.php?accueil">Accueil</a></li>
        <li><a <?php if(isset($_GET['photos'])){ echo $light; } ?> href="index.php?photos">Photos</a></li>
        <li><a <?php if(isset($_GET['videos'])){ echo $light; } ?> href="index.php?videos">Videos</a></li>
        <li><a <?php if(isset($_GET['about_us'])){ echo $light; } ?> href="index.php?about_us">A propos de nous</a></li>
        <li><a <?php if(isset($_GET['contact'])){ echo $light; } ?> href="index.php?contact">Contact</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>