<?php 

echo $content->setOpenTag("div","container");

if (!isset($_GET['chroniques']) && !isset($_GET['news']) && !isset($_GET['biographie'])) {

echo $content->setLink("index.php?about_us&news",$content->setContent("Les news","h2","text-center news col-lg-4 col-md-4 col-sm-4 col-xs-4","news"));
echo $content->setLink("index.php?about_us&chroniques",$content->setContent("Les chroniques","h2","text-center chronique col-lg-4 col-md-4 col-sm-4 col-xs-4","chronique")); 
echo $content->setLink("index.php?about_us&biographie",$content->setContent("Biographie","h2","text-center biographie col-lg-4 col-md-4 col-sm-4 col-xs-4","biographie")); 


}

if (isset($_GET['news']) || isset($_GET['chroniques']) || isset($_GET['biographie'])) {

  $url = substr($_SERVER["REQUEST_URI"],52);
  echo $url;
  echo $_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];

  switch ($url) {
    case 'news':
      $title = "Bestial Soul | News"; $sql = "SELECT id,title,content FROM news ORDER BY id DESC";
      break;
    case 'chroniques':
      $title = "Bestial Soul | Chronique"; $sql = "SELECT id,title,href FROM chronique ORDER BY id DESC";
      break;
    case 'biographie':
      $title = "Bestial Soul | Biographie"; $sql = "SELECT id,content FROM biographie ORDER BY id DESC";
      break;
  }

echo $content->setLink("index.php?about_us",$content->setContent(ucfirst($url),"h2","text-center col-lg-12 col-md-12 col-sm-12 col-xs-12",$title)); 
  
  $query = $db->query($sql);

  while ($row = $query->fetch(PDO::FETCH_OBJ)) { 

   switch ($url) {
    case 'news':
      $html = $content->setOpenTag("div","bloc_news col-md-12");
      $html .= $content->setImg("col-md-12","img/news/$row->id.jpg","left");
      $html .= $content->setContent("$row->title","h3");
      $html .= $content->setContent("$row->content","p");
      $html .= $content->setCloseTag("div");
      break;
    case 'chroniques':
      $html = $content->setOpenTag("div","bloc_chroniques col-md-4 col-sm-4 col-xs-4");
      $html .= $content->setLink("$row->href",$content->setContent("$row->title","h4","text-center"));
      $html .= $content->setImg("col-lg-12 col-md-12 col-sm-12 col-xs-12","img/chroniques/$row->id.jpg");
      $html .= $content->setCloseTag("div");
      break;
    case 'biographie':
      $html = $content->setOpenTag("div","col-lg-12 col-md-12 col-sm-12 col-xs-12");
      $html .= $content->setContent("$row->content","p");
      $html .= $content->setCloseTag("div");
  
  }

  echo $html;

  }

}

echo $content->setCloseTag("div");

  ?>