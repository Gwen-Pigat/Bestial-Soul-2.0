<?php 


$about_us = new Content();


echo $about_us->setOpenTag("div","container");

if (!isset($_GET['chroniques']) && !isset($_GET['news']) && !isset($_GET['biographie'])) {

echo $about_us->setLink("index.php?about_us&news",$about_us->setContent("Les news","h2","text-center news col-lg-4 col-md-4 col-sm-4 col-xs-4","news"));
echo $about_us->setLink("index.php?about_us&chroniques",$about_us->setContent("Les chroniques","h2","text-center chronique col-lg-4 col-md-4 col-sm-4 col-xs-4","chronique")); 
echo $about_us->setLink("index.php?about_us&biographie",$about_us->setContent("Biographie","h2","text-center biographie col-lg-4 col-md-4 col-sm-4 col-xs-4","biographie")); 


}

if (isset($_GET['news']) || isset($_GET['chroniques']) || isset($_GET['biographie'])) {

  $url = substr($_SERVER["REQUEST_URI"],45);

  switch ($url) {
    case 'news':
      $title = "news"; $sql = "SELECT * FROM News ORDER BY id DESC";
      break;
    case 'chroniques':
      $title = "chronique"; $sql = "SELECT * FROM Chronique ORDER BY id DESC";
      break;
    case 'biographie':
      $title = "biographie"; $sql = "SELECT content FROM Biographie ORDER BY id DESC";
      break;
  }

echo $about_us->setLink("index.php?about_us",$about_us->setContent(ucfirst($title),"h2","text-center col-lg-12 col-md-12 col-sm-12 col-xs-12",$title)); 
  
  $query = $link->query($sql);

  while ($row = $query->fetch_object()) { 

   switch ($url) {
    case 'news':
      $content = $about_us->setOpenTag("div","bloc_news col-md-12")
      .$content = $about_us->setImg("col-md-12","img/news/$row->id.jpg","left")
      .$about_us->setContent("$row->title","h3")
      .$about_us->setContent("$row->content","p")
      .$about_us->setCloseTag("div");
      break;
    case 'chroniques':
      $content = $about_us->setOpenTag("div","bloc_chroniques col-md-4 col-sm-4 col-xs-4")
      .$about_us->setLink("$row->href",$about_us->setContent("$row->title","h4","text-center")
      .$about_us->setImg("col-lg-12 col-md-12 col-sm-12 col-xs-12","img/chroniques/$row->id.jpg"),1
      )
      .$about_us->setCloseTag("div");
      break;
    case 'biographie':
      $content = $about_us->setOpenTag("div","col-lg-12 col-md-12 col-sm-12 col-xs-12")
      .$about_us->setContent("$row->content","p")
      .$about_us->setCloseTag("div");
  
  }

  echo $content;
  }

}

echo $about_us->setCloseTag("div");

  ?>