<?php
$title="contact";
  include "templates/nav.php";
  include "templates/header.php";
?>
  <section class="d-flex justify-content-center mt-3">
    <div class="card" style="width: 39rem;">
      <div class="card-body">
       <h5 class="card-title mb-4 text-center">contact</h5>
       <div class="dropdown-divider mt-3 mb-4"></div>
       <p class="text-justify">pour me contacter, merci de bien vouloir laisser un message après avoir rempli les champs requis</p>
       <div class="dropdown-divider mt-3 mb-4"></div>
       <form class="text-center" action="" method="post" enctype="multipart/form-data">
         <input class="mb-3 pl-1" type="date" name="date_contact" value="" placeholder="date"><br>
         <input class="mb-3 pl-1" type="text" name="name_contact" value="" placeholder="votre nom"><br>
         <input class="mb-3 pl-1" type="text" name="firstName_contact" value="" placeholder="votre prénom"><br>
         <input class="mb-3 pl-1" type="text" name="email_contact" value="" placeholder="votre adresse mail"><br>
         <textarea class="mb-3 pl-1" name="text_contact" rows="8" cols="80" placeholder="votre message"></textarea><br>
         <button type="submit" name="submitMessage" class="bg-success text-white p-3">envoyer</button>
       </form>
      </div>
    </div>
  </section>
<?php
  include "templates/footer.php";
?>
