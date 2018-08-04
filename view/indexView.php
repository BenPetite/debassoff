<?php
  include("templates/nav.php");
  include("templates/header.php");
?>
  <article class="d-flex justify-content-center mt-3">
    <?php foreach ($billets as $key => $billet){ ?>


    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="../public/img/portrait.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><?php echo $billet["titre_billet"]; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><!--format :--></h6>
        <h6 class="card-subtitle mb-2 text-muted"><!--techniques :--></h6>
        <p class="card-text"><?php echo $billet["texte_billet"]; ?></p>
      </div>
    </div>
  <?php } ?>
  </article>
<?php
  include("templates/footer.php");
?>
