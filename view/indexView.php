<?php
$description="dessins, tableaux, bijoux, expositions d'Anne Sophie de Bassoff";
$title="accueil";
  include("templates/nav.php");
  include("templates/header.php");
?>
<section class="d-flex flex-column justify-content-center mt-3 text-justify">
  <h5 class="text-center">dernières publications</h5>
<?php
  foreach ($news as $key => $new){
?>
  <div class="card mb-2 align-self-center" style="width: 36rem;">
    <p class="card-subtitle mb-2 text-muted mt-1 ml-1"><?php echo $new["date_news"]; ?></p>
    <img id="id1" class = "popup" src="../uploads/<?php echo $new["image_news"] ?>" alt="<?php echo $new["title_news"] ?>" style="width: 36rem;" title="cliquez pour agrandir">
    <div id="myModal" class="modal">
      <span class="close">×</span>
      <img class="modal-content" id="img01">
    </div>
    <div class="card-body text-center">
      <h5 class="card-title"><em><?php echo $new["title_news"]; ?></em></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?php echo $new["tech_news"]; ?></h6>
      <p><?php echo $new["format_news"]; ?></p>
      <p><?php echo $new["text_news"]; ?></p>
    </div>
  </div>
<?php
  }
?>
</section>
<?php
  include("templates/footer.php");
?>
