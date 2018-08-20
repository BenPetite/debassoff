<?php
$title="admin/galeries";
  include "templates/nav.php";
  include "templates/header.php";
?>
<section class="d-flex justify-content-center mt-3">
 <div class="card" style="width: 50rem;">
   <div class="card-body">
     <h5 class="card-title text-center">administration : galeries en ligne</h5>
     <div class="dropdown-divider mt-3 mb-4"></div>
     <form class="d-flex justify-content-center mt-3" action="" method="post" enctype="multipart/form-data">
       <div class="card  text-center" style="width: 40rem;">
         <p>ajouter :</p>
         <div class="card-body">
             <input type="text" name="olgallery_name" placeholder="nom" class="mb-2"><br>
             <input type="text" name="olgallery_link" class="mb-2" placeholder="URL"><br>
             <textarea class="card-text mb-2" name="olgallery_infos" rows="8" cols="80" placeholder="informations complémentaires"></textarea>
         </div>
         <div class="mb-3">
           <button type="submit" name="addGallery" class="bg-success text-white p-3">ajouter</button>
         </div>
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
         <div class="d-flex justify-content-center">
           <form class="form" action="" method="post">
             <input type="hidden" name="id_olgallery" value="<?php echo $gallery['id_olgallery']; ?>">
             <button type="submit" name="deleteGallery" class="text-muted m-3"><i class="fas fa-trash-alt" title="supprimer"></i></button>
           </form>
         </div>
         <!-- <form class="" action="" method="post" enctype="multipart/form-data"> -->
           <!-- <button type="submit" name="deleteGallery">supprimer</button> -->
           <!-- <button type="submit" name="button">modifier</button> -->
         <!-- </form> -->
       </div><br>
     </section>
     <?php } ?>
   </div>
 </div>
</section>
<?php
  include "templates/footer.php";
?>
