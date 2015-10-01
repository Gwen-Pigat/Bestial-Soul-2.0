<script type="text/javascript">

$(document).ready(function() {
  $(".fancybox-button").fancybox({
    prevEffect    : 'none',
    nextEffect    : 'none',
    closeBtn    : false,
    helpers   : {
      title : { type : 'inside' },
      buttons : {}
    }
  });
});

</script>

<?php 

$content_photos = new Content();

echo Content::setOpentag("div","container");

  echo $content_photos->setOpenTag("div","col-lg-12 col-md-12 col-sm-12 col-xs-12 photo_gallery");

    echo $content_photos->setOpenTag("div","col-lg-4 col-md-4 col-sm-4 col-xs-4 bloc_gallery");

      for ($num = 1; $num <= 56; $num++ ) {
      echo "<a class=\"gallery_1 fancybox-button\" rel=\"gallery_1 fancybox-button\" href=img/gallery_caroline/$num.jpg\">";
      }
      for ($num = 89; $num <= 109; $num++ ) {
      echo "<a class=\"gallery_1 fancybox-button\" rel=\"gallery_1 fancybox-button\" href=\"img/gallery_caroline/$num.jpg\">";
      }
      echo $content_photos->setImg("col-lg-12 col-md-12 col-sm-12 col-xs-12","img/caroline.jpg");
      echo $content_photos->setContent("Photos Caroline Rousseau","p");

      echo $content_photos->setClosetag("a");

    echo $content_photos->setClosetag("div");



    echo $content_photos->setOpenTag("div","col-lg-4 col-md-4 col-sm-4 col-xs-4 bloc_gallery");

      for ($num = 1; $num <= 12; $num++ ) {
      echo "<a class=\"gallery_2 fancybox-button\" rel=\"gallery_2 fancybox-button\" href=\"img/gallery_anthony/$num.jpg\">";
      }
      echo $content_photos->setImg("col-lg-12 col-md-12 col-sm-12 col-xs-12","img/default.png");
      echo $content_photos->setContent("Photos Anhony Oblin","p");

      echo $content_photos->setClosetag("a");

    echo $content_photos->setClosetag("div");


    echo $content_photos->setOpenTag("div","col-lg-4 col-md-4 col-sm-4 col-xs-4 bloc_gallery");

      for ($num = 1; $num <= 16; $num++ ) {
      echo "<a class=\"gallery_3 fancybox-button\" rel=\"gallery_3 fancybox-button\" href=\"img/gallery_divers/$num.jpg\">";
      }
      echo $content_photos->setImg("col-lg-12 col-md-12 col-sm-12 col-xs-12","img/default.png");
      echo $content_photos->setContent("Photos Divers","p");

      echo $content_photos->setClosetag("a");

    echo $content_photos->setClosetag("div");

  echo $content_photos->setClosetag("div");

echo Content::setCloseTag("div");