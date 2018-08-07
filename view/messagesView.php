<?php
  include("templates/nav.php");
  include("templates/header.php");
?>
  <article class="d-flex justify-content-center mt-5">
<?php
    foreach ($messages as $key => $message) {
?>
      <div class="card text-center" style="width: 30rem;">
        <div class="card-body">
          <p><?php echo $message["date_contact"]; ?></p>
          <h5 class="card-title"><?php echo $message["name_contact"].' '.$message["firstName_contact"]; ?></h5>
          <h6 class="card-subtitle mb-2 text-muted"><?php echo $message["email_contact"]; ?></h6>
          <p class="card-text"><?php echo $message["text_contact"]; ?></p>
        </div>
        <div class="d-flex justify-content-center">
        <a href="#" class="fas fa-archive text-muted m-3" title="archiver le message"></a>
        <a href="#" class="fas fa-trash-alt text-muted m-3" title="supprimer le message"></a>
        <a href="" class="fas fa-skull text-muted m-3" title="supprimer le contact"></a>
        </div>
      </div>
<?php
}
?>
    </article>
<?php
  include("templates/footer.php");
?>
