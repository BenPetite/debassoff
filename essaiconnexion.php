<?php
require("model/connectionDB.php");
include "view/templates/nav.php";
include "view/templates/header.php";
// $req=$bdd->query('SELECT * FROM billet');
// $billet=$req->fetch(PDO::FETCH_ASSOC);
//   foreach ($billet as $key => $value) {
//   }
//   var_dump($billet);
$req=$bdd->query('SELECT * FROM contact ORDER BY id_contact');
$messages=$req->fetchall(PDO::FETCH_ASSOC);
?>
<article class="d-flex justify-content-center mt-3">
<?php
  foreach ($messages as $key => $message) {
?>
    <div class="card" style="width: 40rem;">
      <div class="card-body">
        <h5 class="card-title"><?php echo $message["nom_contact"].' '.$message["prenom_contact"]; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $message["email_contact"]; ?></h6>
        <p class="card-text"><?php echo $message["message_contact"]; ?></p>
      </div>
    </div>
<?php
// var_dump($messages);
}
?>
  </article>
<?php
$req->closeCursor();
include "view/templates/footer.php";
?>
