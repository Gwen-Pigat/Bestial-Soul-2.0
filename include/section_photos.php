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

<div class="container">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 photo_gallery">
    
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 bloc_gallery">
      <?php for ($num = 1; $num <= 56; $num++ ) { ?>
      <a class="gallery_1 fancybox-button" rel="gallery_1 fancybox-button" href=<?php echo "img/gallery_caroline/$num.jpg" ?>>
      <?php } for ($num = 89; $num <= 109; $num++ ) { ?>
      <a class="gallery_1 fancybox-button" rel="gallery_1 fancybox-button" href=<?php echo "img/gallery_caroline/$num.jpg" ?>>
      <?php } ?>
        <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12" src="img/caroline.jpg">
        <p>Photos Caroline Rousseau</p>
      </a>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 bloc_gallery">
      <?php for ($num = 1; $num <= 12; $num++ ) { ?>
      <a class="gallery_2 fancybox-button" rel="gallery_2 fancybox-button" href=<?php echo "img/gallery_anthony/$num.jpg" ?>>
      <?php } ?>
        <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12" src="img/default.png">
        <p>Photos Anthony Oblin</p>
      </a>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 bloc_gallery">
      <?php for ($num = 1; $num <= 16; $num++ ) { ?>
      <a class="gallery_3 fancybox-button" rel="gallery_3 fancybox-button" href=<?php echo "img/gallery_divers/$num.jpg" ?>>
      <?php } for ($num = 57; $num <= 88; $num++ ) { ?>
      <a class="gallery_3 fancybox-button" rel="gallery_3 fancybox-button" href=<?php echo "img/gallery_divers/$num.jpg" ?>>
      <?php } ?>
        <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12" src="img/default.png">
        <p>Divers</p>
      </a>
    </div>

  </div>
</div>

<?php if (!empty($_GET['photos'])) {
  echo "FALSE";
  echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=index.php?photos'>";
} ?>