<?php
$title="messages";
  include("templates/nav.php");
  include("templates/header.php");
?>
  <article class="d-flex flex-wrap ml-5 mt-5">
<?php
    foreach ($messages as $key => $message) {
?>
      <div class="card text-center mr-2 mb-3 ml-2" style="width: 30rem;">
        <div class="card-body">
          <p><?php echo $message["date_contact"]; ?></p>
          <h5 class="card-title"><?php echo $message["name_contact"].' '.$message["firstName_contact"]; ?></h5>
          <h6 class="card-subtitle mb-2 text-muted"><?php echo $message["email_contact"]; ?></h6>
          <p class="card-text"><?php echo $message["text_contact"]; ?></p>
        </div>
        <div class="d-flex justify-content-center">
          <!-- <button type="submit" name="archiveMessage" class="fas fa-archive text-muted m-3" title="archiver le message"></button> -->
          <form class="form" action="" method="post">
            <input type="hidden" name="id_contact" value="<?php echo $message['id_contact']; ?>">
            <button type="submit" name="deleteMessage" class="text-muted m-3"><i class="fas fa-trash-alt" title="supprimer le message"></i></button>
          </form>
        </div>
      </div>
<?php
}
?>
    </article>
<?php
  include("templates/footer.php");
?>
