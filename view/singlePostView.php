<?php
$title="vue";
  include("templates/nav.php");
  include("templates/header.php");

?>
  <article class="d-flex justify-content-center mt-3">
    <div class="card" style="width: 60rem;">
      <img class="card-img-top" src="../uploads/<?php echo $news["image_news"]; ?>" alt="<?php echo $news["image_news"]; ?>">
      <div class="card-body">
        <h5 class="card-title"><?php echo $news["title_news"]; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $news["format_news"]; ?></h6>
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $news["tech_news"]; ?></h6>
        <p class="card-text"><?php echo $news["text_news"]; ?></p>
      </div>
    </div>
  </article>
<?php
  include("templates/footer.php");
?>
