<?php
$title="accueil";
  include("templates/nav.php");
  include("templates/header.php");
?>
  <article class="d-flex flex-column mt-3">
    <h5 class="text-center">dernières publications</h5>
    <?php
foreach ($news as $key => $new){
?>
      <div class="card mb-2" style="width: 36rem;">
        <p class="card-subtitle mb-2 text-muted mt-1 ml-1"><?php echo $new["date_news"]; ?></p>
        <img class="card-img-top" src="../uploads/<?php echo $new["image_news"] ?>" alt="image">
        <div class="card-body text-center">
          <h5 class="card-title"><?php echo $new["title_news"]; ?></h5>
          <h6 class="card-subtitle mb-2 text-muted"><?php echo $new["tech_news"]; ?></h6>
          <p><?php echo $new["format_news"]; ?></p>
          <p><?php echo $new["text_news"]; ?></p>
        </div>
      </div>
<?php } ?>
  </article>
<?php
  include("templates/footer.php");
?>
