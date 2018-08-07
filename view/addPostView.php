<?php
  include("templates/nav.php");
  include("templates/header.php");
?>
  <form class="d-flex justify-content-center mt-3" action="" method="post" enctype="multipart/form-data">
    <div class="card" style="width: 40rem;">
      <div class="card-body">
          <input type="date" name="date_billet" placeholder="date" class="mb-2"><br>
          <input type="hidden" name="MAX_FILE_SIZE" value="1 048 576"><!--1 Mo-->
          <input type="file" name="image_billet" class="mb-2"><br>
          <input type="text" name="titre_billet" placeholder="titre" class="mb-2"><br>
          <input type="text" name="format_billet" placeholder="format" class="mb-2"><br>
          <input type="text" name="tech_billet" placeholder="techniques" class="mb-2"><br>
          <textarea class="card-text mb-2" name="texte_billet" rows="8" cols="80"></textarea>
      </div>
      <button type="submit" name="addPost" class="bg-dark text-white p-3">publier</button>
    </div>
  </form>
<?php
  include("templates/footer.php");
?>
