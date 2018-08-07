<?php
  include "templates/nav.php";
  include "templates/header.php";
?>
  <section class="d-flex justify-content-center mt-3">
   <div class="card" style="width: 50rem;">
     <div class="card-body">
       <h5 class="card-title text-center">expositions</h5>
       <?php
       foreach ($expos as $key => $expo){
       ?>
           <div class="card mb-2" style="width: 40rem;">
            <div class="card-body">
              <h5 class="card-title"><em><?php echo $expo["title_expo"]; ?></em></h5>
              <h6 class=""><?php echo $expo["place_expo"]; ?></h6>
              <h6 class="mb-3"><?php echo $expo["city_expo"];?> (<?php echo $expo["country_expo"]; ?>)</h6>
              <h6 class="card-subtitle mb-2 text-muted">du <?php echo $expo["startDate_expo"]; ?> au <?php echo $expo["endDate_expo"]; ?></h6>
              <p class="card-text"><?php echo $expo["text_expo"]; ?></p>
              <a href="<?php echo $expo["expo_link"]; ?>" class="card-link bg-success text-white p-2">voir le lien</a>
            </div>
           </div>
       <?php } ?>
     </div>
   </div>
  </section>
<?php
  include "templates/footer.php";
?>
