<?php
  include "templates/nav.php";
  include "templates/header.php";
?>
<section class="d-flex justify-content-center mt-3">
 <div class="card" style="width: 50rem;">
   <div class="card-body">
     <h5 class="card-title">galeries en ligne</h5>
     <?php
     foreach ($galleries as $key => $gallery){
     ?>
     <ul>
       <li>
         <p><?php echo $gallery["olgallery_name"]; ?></p>
         <a href="<?php echo $gallery['olgallery_link']; ?>" class="btn btn-success">voir la galerie</a>
         <p class="mt-3"><?php echo $gallery['olgallery_infos']; ?></p>
       </li><br>
     </ul>
     <?php } ?>
   </div>
 </div>
</section>
<?php
  include "templates/footer.php";
?>
