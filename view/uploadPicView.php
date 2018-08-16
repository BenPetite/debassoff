<?php
include "templates/nav.php";
include "templates/header.php";
 ?>
 <!-- UPLOAD -->
 <section class="d-flex justify-content-center mt-3">
  <div class="card justify-content-center" style="width: 20rem;">
    <div class="card-body">
      <form action="../view/upload.php" method="post" enctype="multipart/form-data" class="d-flex flex-column justify-content-center">
       <p>choisir une image à télécharger :</p>
       <input type="file" name="fileToUpload" id="fileToUpload" class="mb-2"><br>
       <input type="text" name="title_pic" placeholder=" nom.format" class="mb-2">
       <input type="text" name="format_pic" placeholder=" format" class="mb-2">
       <input type="text" name="tech_pic" placeholder=" techniques" class="mb-2">
       <textarea name="text_pic" rows="8" cols="80" placeholder=" commentaires"></textarea>
       <div class="mt-3">
         <input type="submit" value="ajouter" name="submit" class="bg-success">
       </div>
      </form>
    </div>
  </div>
</section>
<!-- /UPLOAD -->

<?php
include "templates/footer.php";
 ?>
