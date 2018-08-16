<?php
  include("templates/nav.php");
  include("templates/header.php");
  $images=glob('../uploads/*.{jpg,png,gif}', GLOB_BRACE);
foreach ($images as $key => $image){
  var_dump($image);?>
  <div class="card">
  <img src="<?php echo $image["image_news"]; ?>" alt="">
  </div>
<?php } ?>
<?php
  include("templates/footer.php");
?>
