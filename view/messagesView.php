<?php
  include("templates/nav.php");
  include("templates/header.php");
?>
  <article class="d-flex justify-content-center mt-3">
<?php
    foreach ($messages as $key => $message) {
?>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?php echo $message["nom_contact"].' '.$message["prenom_contact"]; ?></h5>
          <h6 class="card-subtitle mb-2 text-muted"><?php echo $message["email_contact"]; ?></h6>
          <p class="card-text"><?php echo $message["email_contact"]; ?></p>
        </div>
      </div>
<?php
}
?>
    </article>
<?php
  $req->closeCursor();
  include("templates/footer.php");
?>
