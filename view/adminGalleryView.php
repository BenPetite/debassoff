<?php
$title="admin/galeries";
  include "templates/nav.php";
  include "templates/header.php";
?>
<section class="d-flex justify-content-center mt-3">
 <div class="card" style="width: 50rem;">
   <div class="card-body">
     <h5 class="card-title text-center">galeries en ligne</h5>
     <div class="dropdown-divider mt-3 mb-4"></div>
     <form class="d-flex justify-content-center mt-3" action="" method="post" enctype="multipart/form-data">
       <div class="card" style="width: 40rem;">
         <p>ajouter :</p>
         <div class="card-body">
             <input type="text" name="olgallery_name" placeholder="nom" class="mb-2"><br>
             <input type="text" name="olgallery_link" class="mb-2" placeholder="URL"><br>
             <textarea class="card-text mb-2" name="olgallery_infos" rows="8" cols="80" placeholder="informations complémentaires"></textarea>
         </div>
         <button type="submit" name="addGallery" class="bg-success text-white p-3">ajouter</button>
       </div>
     </form>
     <div class="dropdown-divider mt-3 mb-4"></div>
     <?php
     foreach ($galleries as $key => $gallery){
     ?>
     <section class="text-center">
       <div>
         <h5><?php echo $gallery["olgallery_name"]; ?></h5>
         <a href="<?php echo $gallery['olgallery_link']; ?>" class="btn btn-success">voir la galerie</a>
         <p class="mt-3"><?php echo $gallery['olgallery_infos']; ?></p>
         <button type="button" name="deleteGallery">supprimer</button>
         <button type="button" name="button">modifier</button>
       </div><br>
     </section>
     <?php } ?>
   </div>
 </div>
</section>
<?php
  include "templates/footer.php";
?>
