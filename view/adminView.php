<?php
  include "templates/nav.php";
  include "templates/header.php";
?>
<article class="justify-content-center">
 <div class="card" style="width: 40rem;">
  <div class="card-body d-flex flex-column justify-content-center ">
    <h5 class="card-title text-center">espace d'administration</h5>
    <div class="dropdown-divider mt-3 mb-4"></div>
          <div class="card-body d-flex flex-row">
            <a href="../controller/messages.php" class="btn buttonAdd card-title text-light mr-4">messages</a>
            <p></p>
          </div>
          <div class="dropdown-divider mt-3 mb-4"></div>
            <div class="card-body d-flex flex-row">
              <a href="../controller/adminPost.php" class="btn buttonAdd text-light mr-4">publications</a>
              <p>publier, supprimer, modifier</p>
            </div>
            <div class="dropdown-divider mt-3 mb-4"></div>
            <div class="card-body d-flex flex-row">
              <a href="../controller/adminExpo.php" class="btn buttonAdd text-light mr-4">expositions</a>
              <p>publier, supprimer, modifier</p>
            </div>
            <div class="dropdown-divider mt-3 mb-4"></div>
            <div class="card-body d-flex flex-row">
             <a href="../controller/adminGallery.php" class="btn buttonAdd text-white mr-4">galeries</a>
             <p>publier, supprimer, modifier</p>
           </div>
  </div>
 </div>
</article>
<?php
  include "templates/footer.php";
?>
