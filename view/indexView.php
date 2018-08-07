<?php
  include("templates/nav.php");
  include("templates/header.php");
?>
  <article class="d-flex justify-content-center mt-3">
    <?php
foreach ($news as $key => $new) {
?>
    <div class="card" style="width: 50rem;">
      <p><?php echo $new["date_news"]; ?></p>
      <img class="card-img-top" src="../public/img/portrait.jpg" alt="Card image cap">
      <div class="card-body">
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
