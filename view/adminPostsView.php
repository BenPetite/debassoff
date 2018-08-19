<?php
  $title="publications";
  $images=glob('uploads/*.{jpg,png,gif}', GLOB_BRACE);
  include "templates/nav.php";
  include "templates/header.php";
?>
<article class="d-flex flex-column justify-content-center mt-3">
  <section>
<!-- PICTURE UPLOAD -->
<h5 class="card-title text-center">administration : publications</h5>
    <h6 class="card-title text-center">image à télécharger</h6>
    <form class="mt-3" action="../view/upload.php" method="post" enctype="multipart/form-data">
      <div class="card" style="width: 40rem;">
        <div class="card-body">
          <input type="file" name="fileToUpload" id="fileToUpload" class="mb-2"><br>
          <div class="mt-3">
            <input type="submit" value="ajouter" name="submit" class="bg-success">
          </div>
        </div>
      </div>
    </form>
<!-- /PICTURE UPLOAD -->
<!-- POST -->
    <h5 class="card-title text-center">publier</h5>
    <form class="d-flex justify-content-center mt-3" action="" method="post" enctype="multipart/form-data">
      <div class="card" style="width: 40rem;">
        <div class="card-body">
          <input type="text" name="image_news" placeholder="nom.format de l'image" class="mb-2"><br>
          <input type="text" name="title_news" class="mb-2" placeholder="titre de la publication"><br>
          <input type="date" name="date_news" placeholder="ville" class="mb-2"><br>
          <input type="text" name="tech_news" placeholder="techniques" class="mb-2"><br>
          <input type="text" name="format_news" placeholder="format" class="mb-2"><br>
          <textarea class="card-text mb-2" name="text_news" rows="8" cols="80" placeholder="informations complémentaires"></textarea>
        </div>
      <button type="submit" name="addPost" class="bg-success text-white p-3">publier</button>
      </div>
    </form>
  </section>
<!-- GET POSTS -->
  <h5 class="mt-5 text-center mb-3">publications</h5>
  <?php
  foreach ($news as $key => $new) {
  ?>
  <section class="d-flex flex-column">
    <div class="card" style="width: 40rem;">
      <div class="card-body">
        <p class="card-subtitle mb-2 text-muted mt-1 ml-1"><?php echo $new["date_news"]; ?></p>
        <img class="card-img-top" src="../uploads/<?php echo $new["image_news"]; ?>" alt="Card image cap">
        <h5 class="card-title"><?php echo $new["title_news"]; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $new["tech_news"]; ?></h6>
        <p><?php echo $new["format_news"]; ?></p>
        <p><?php echo $new["text_news"]; ?></p>
        <form class="" action="" method="post" enctype="multipart/form-data">
          <button type="submit" name="deletePost">supprimer</button>
        </form>
        <a href="../controller/editExpo.php">modifier</a>
      </div>
    </div>
  </section>
</article>
  <?php
}
  include "templates/footer.php";
?>
