<?php
$title="administration";
  include("templates/nav.php");
  include("templates/header.php");
?>
<section class="d-flex justify-content-center mt-3">
 <div class="card" style="width: 40rem;">
  <div class="card-body d-flex flex-column align-self-center">
    <h5 class="card-title text-center">espace d'administration</h5>
    <div class="dropdown-divider mt-3 mb-4"></div>
          <div class="card-body d-flex flex-column">
            <a href="../controller/messages.php" class="btn buttonAdd card-title text-light mr-4">messages</a><br>
            <p class="text-center">lire les messages reçus : nom et prénom du contact, adresse mail <br/> supprimer les messages</p>
          </div>
          <div class="dropdown-divider mt-3 mb-4"></div>
            <div class="card-body d-flex flex-column">
              <a href="../controller/adminPost.php" class="btn buttonAdd text-light mr-4">publications</a><br>
              <p class="text-center">publier, supprimer, modifier</p>
            </div>
            <div class="dropdown-divider mt-3 mb-4"></div>
            <div class="card-body d-flex flex-column">
              <a href="../controller/adminExpo.php" class="btn buttonAdd text-light mr-4">expositions</a><br>
              <p class="text-center">publier, supprimer, modifier</p>
            </div>
            <div class="dropdown-divider mt-3 mb-4"></div>
            <div class="card-body d-flex flex-column">
             <a href="../controller/adminGallery.php" class="btn buttonAdd text-white mr-4">galeries</a><br>
             <p class="text-center">publier, supprimer, modifier</p>
           </div>
  </div>
 </div>
</section>
<?php
  include "templates/footer.php";
?>
