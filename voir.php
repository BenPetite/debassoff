<?php

$images=glob('uploads/*.{jpg,png,gif}', GLOB_BRACE);
var_dump($images);
?>
<?php foreach ($images as $key => $image){ ?>
 <div class="card" style="width: 10rem;">
   <img class="card-img-top w-25" src="<?php echo $image; ?>" alt="Card image cap">
   <div class="card-body">
     <h5 class="card-title">Card title</h5>
     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
     <a href="#" class="btn btn-primary">Go somewhere</a>
   </div>
 </div>
   <?php } ?>
