<?php 


$about_us = new Content();


echo $about_us->setOpenTag("div","container");

if (!isset($_GET['chroniques']) && !isset($_GET['news']) && !isset($_GET['biographie'])) {

echo $about_us->setLink("index.php?about_us&news",$about_us->setContent("Les news","h2","text-center news col-lg-4 col-md-4 col-sm-4 col-xs-4","news"));
echo $about_us->setLink("index.php?about_us&chroniques",$about_us->setContent("Les chroniques","h2","text-center chronique col-lg-4 col-md-4 col-sm-4 col-xs-4","chronique")); 
echo $about_us->setLink("index.php?about_us&biographie",$about_us->setContent("Biographie","h2","text-center biographie col-lg-4 col-md-4 col-sm-4 col-xs-4","biographie")); 


}

if (isset($_GET['news'])) {
  http://www.french-metal.com/chroniques/bestialsoul.html#.VJbeIF4B8

echo $about_us->setContent("Les news","h2","text-center news","news");

  $query = $link->query("SELECT * FROM News ORDER BY id DESC");

  while ($row = $query->fetch_object()) { 

  echo $about_us->setOpenTag("div","bloc_news col-md-12");

    echo $about_us->setImg("col-md-12","img/news/$row->id.jpg","left");
    echo $about_us->setContent("$row->title","h3");
    echo $about_us->setContent("$row->content","p");

  echo $about_us->setCloseTag("div");

  }

}

if (isset($_GET['chroniques'])) {

echo $about_us->setContent("Les chroniques","h2","text-center chronique","chronique");

  $query = $link->query("SELECT * FROM Chronique ORDER BY id DESC")or die("Erreur query");

  while ($row = $query->fetch_object()) { 

  echo $about_us->setOpenTag("div","bloc_chroniques col-md-4 col-sm-4 col-xs-4");

    echo $about_us->setLink(
      "$row->href",$about_us->setContent("$row->title","h4","text-center")
      .$about_us->setImg("col-lg-12 col-md-12 col-sm-12 col-xs-12","img/chroniques/$row->id.jpg"),1
      );

  echo $about_us->setCloseTag("div");

  }

}

if (isset($_GET['biographie'])) {

  echo $about_us->setContent("Biographie","h2","text-center chronique","biographie");

  $query = $link->query("SELECT * FROM Biographie")or die("Erreur query");

  while ($row = $query->fetch_object()) { 

  echo $about_us->setOpenTag("div","col-lg-12 col-md-12 col-sm-12 col-xs-12");

    echo $about_us->setContent("$row->content","p");

  echo $about_us->setCloseTag("div");

  } 

}


echo $about_us->setCloseTag("div");

  ?>