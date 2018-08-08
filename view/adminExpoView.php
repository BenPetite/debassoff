<?php
  include "templates/nav.php";
  include "templates/header.php";
?>
  <section class="d-flex justify-content-center mt-3">
   <div class="card justify-content-center" style="width: 50rem;">
     <div class="card-body">
       <h5 class="card-title text-center">expositions, salons, festivals</h5>
       <?php
       foreach ($expos as $key => $expo){
       ?>
           <div class="card mb-2 text-center">
            <div class="card-body">
              <h4 class="card-title"><em><?php echo $expo["title_expo"]; ?></em></h4>
              <h6 class=""><?php echo $expo["place_expo"]; ?></h6>
              <h6 class="mb-3"><?php echo $expo["city_expo"];?> (<?php echo $expo["country_expo"]; ?>)</h6>
              <h6 class="card-subtitle mb-2 text-muted">du <?php echo $expo["startDate_expo"]; ?> au <?php echo $expo["endDate_expo"]; ?></h6>
              <p class="card-text mb-4"><?php echo $expo["text_expo"]; ?></p>
              <button type="button" name="button">supprimer</button>
              <button type="button" name="button">modifier</button>
            </div>
           </div>
       <?php } ?>
     </div>
   </div>
  </section>
<?php
  include "templates/footer.php";
?>
