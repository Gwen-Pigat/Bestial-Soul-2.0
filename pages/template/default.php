<html>
<head>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Add jQuery library -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- <meta charset="iso-8859-15"> -->
<meta charset="utf-8">
<meta name="description" content="<?php echo $description ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title><?php echo $title; ?></title>
</head>
<body>
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
      <?php $monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];  ?>
      <a class="navbar-brand" href='<?php echo $monUrl; ?>' ><?php echo $url ?></a>
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
	<?php echo $content; ?>
	
<footer class="text-center">

<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/switch.js"></script>
<a href="index.php?contact"><h2>Contactez-nous</h2></a>
<div class="socials">

<a target="_blank" href="https://www.facebook.com/Bestial-Soul-184110098425138/timeline/?ref=hl"><i class="fa fa-facebook-square fa-4x"></i></a>
<a target="_blank" href="https://www.youtube.com/user/PixOFHeaven"><i class="fa fa-youtube-square fa-4x"></i></a>
</div>
</footer>
</body>
</html>