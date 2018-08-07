<?php
include "templates/nav.php";
include "templates/header.php";

    // foreach ($administration as $key => $value) {
    //   echo $value['id_admin']." ".$value['pseudo_admin']." ".$value['mdp_admin'];
    //   // var_dump($value);
    // }
?>
<article class="d-flex justify-content-center mt-3">
 <div class="card" style="width: 50rem;">
   <div class="card-body">
     <h5 class="card-title text-center">espace d'administration</h5>
     <div class="card" style="width: 45rem;">
       <div class="card-body">
         <h5 class="card-title">messages</h5>
         <!-- <p class="card-text">machin</p> -->
           <a href="../controller/messages.php" class="btn btn-success">voir les messages</a>
       </div>
     </div>
      <div class="card" style="width: 45rem;">
        <div class="card-body">
          <h5 class="card-title">billets</h5>
          <!-- <p class="card-text">machin</p> -->
            <a href="../controller/admin.php" class="btn btn-primary">ajouter</a>
            <a href="../controller/deletePost.php" class="btn btn-danger">supprimer</a>
            <a href="#" class="btn btn-warning">modifier</a>
        </div>
      </div>
      <div class="card" style="width: 45rem;">
        <div class="card-body">
        <h5 class="card-title">expositions</h5>
        <!-- <p class="card-text">machin</p> -->
         <a href="../controller/addExpo.php" class="btn btn-primary">ajouter</a>
         <a href="#" class="btn btn-danger">supprimer</a>
         <a href="#" class="btn btn-warning">modifier</a>
        </div>
      </div>
      <div class="card" style="width: 45rem;">
        <div class="card-body">
        <h5 class="card-title">galeries en ligne</h5>
        <!-- <p class="card-text">machin</p> -->
         <a href="../controller/addGallery.php" class="btn btn-primary">ajouter</a>
         <a href="#" class="btn btn-danger">supprimer</a>
         <a href="#" class="btn btn-warning">modifier</a>
        </div>
      </div>
   </div>
 </div>
</article>

<?php
  include "templates/footer.php";
?>
