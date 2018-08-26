<?php
$description="galeries en ligne d'Anne Sophie de de Bassoff";
$title="galeries en ligne";
  include "templates/nav.php";
  include "templates/header.php";
?>
<section class="d-flex justify-content-center mt-3">
  <div class="card" style="width: 50rem;">
    <div class="card-body">
      <h5 class="card-title text-center">galeries en ligne</h5>
    <div class="dropdown-divider mt-3 mb-4"></div>
<?php
    foreach ($galleries as $key => $gallery){
?>
    <section class="text-center">
      <div>
        <h5><?php echo $gallery["olgallery_name"]; ?></h5>
        <a href="<?php echo $gallery['olgallery_link']; ?>" class="btn btn-success" target=_blank>voir la galerie</a>
        <p class="mt-3"><?php echo $gallery['olgallery_infos']; ?></p>
      </div><br>
    </section>
<?php
    } 
?>
    </div>
  </div>
</section>
<?php
  include "templates/footer.php";
?>
