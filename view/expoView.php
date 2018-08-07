<?php
  include "templates/nav.php";
  include "templates/header.php";
?>
  <section class="d-flex justify-content-center mt-3">
   <div class="card" style="width: 50rem;">
     <div class="card-body">
       <h5 class="card-title">expositions</h5>
       <?php
       foreach ($expos as $key => $expo){
       ?>
           <div class="card" style="width: 40rem;">
            <div class="card-body">
              <h5 class="card-title"><?php echo $expo["title_expo"]; ?></h5>
              <h5 class="card-title"><?php echo $expo["place_expo"]; ?></h5>
              <h5 class=""><?php echo $expo["city_expo"];?><?php echo $expo["country_expo"]; ?></h5>
              <h6 class="card-subtitle mb-2 text-muted">du <?php echo $expo["startDate_expo"]; ?> au <?php echo $expo["endDate_expo"]; ?></h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
           </div>
       <?php } ?>
     </div>
   </div>
  </section>
<?php
  include "templates/footer.php";
?>
