<?php
$title="post";
  include("templates/nav.php");
  include("templates/header.php");
?>
  <article class="d-flex flex-column mt-3">
    <p>ajouter une publication</p>
    <section class="d-flex justify-content-center mt-3">
     <div class="card justify-content-center" style="width: 20rem;">
       <div class="card-body">
         <!-- <form action="../view/upload.php" method="post" enctype="multipart/form-data" class="d-flex flex-column justify-content-center">
          <p>télécharger une image depuis l'ordinateur :</p>
          <input type="file" name="fileToUpload" id="fileToUpload" class="mb-2"><br>
          <div class="mt-3">
            <input type="submit" value="ajouter" name="addPic" class="bg-success">
          </div>
        </form> -->
        <form class="" action="index.html" method="post" enctype="multipart/form-data">
          <input type="text" name="image_news" placeholder="nom.format" class="mb-2">
          <input type="text" name="title_news" placeholder=" titre" class="mb-2">
          <input type="text" name="format_news" placeholder=" format" class="mb-2">
          <input type="text" name="tech_news" placeholder=" techniques" class="mb-2">
          <textarea name="text_news" rows="8" cols="80" placeholder=" commentaires"></textarea>
          <div class="mt-3">
            <input type="submit" name="addPost" class="bg-success">
          </div>
        </form>
       </div>
     </div>
   </section>
<?php
    foreach ($news as $key => $new) {
?>
  <section class="d-flex flex-wrap justify-content-around">
    <div class="card" style="width: 20rem;">
      <p class="card-subtitle mb-2 text-muted mt-1 ml-1"><?php echo $new["date_news"]; ?></p>
      <img class="card-img-top" src="../public/img/portrait.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><?php echo $new["title_news"]; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $new["tech_news"]; ?></h6>
        <p><?php echo $new["format_news"]; ?></p>
        <p><?php echo $new["text_news"]; ?></p>
          <button type="submit" name="deletePost">supprimer</button>
          <a href="../controller/editPost.php">modifier</a>
      </div>
    </div>
  </section>
<?php } ?>
  </article>
<?php
  include("templates/footer.php");
?>
