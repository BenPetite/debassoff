<?php
$title="administration";
  include "templates/nav.php";
  include "templates/header.php";
?>
  <section class="d-flex justify-content-center mt-3">
   <div class="card justify-content-center" style="width: 50rem;">
     <div class="card-body">
       <h5 class="card-title text-center">administration : expositions, salons, festivals</h5>
       <form class="d-flex justify-content-center mt-3" action="" method="post" enctype="multipart/form-data">
         <div class="card" style="width: 40rem;">
           <div class="card-body text-center">
               <input type="text" name="title_expo" placeholder="nom de l'expo" class="mb-2"><br>
               <input type="text" name="place_expo" class="mb-2" placeholder="lieu de l'expo"><br>
               <input type="text" name="city_expo" placeholder="ville" class="mb-2"><br>
               <input type="text" name="country_expo" placeholder="pays" class="mb-2"><br>
               du :
               <input type="date" name="startDate_expo" placeholder="date de début" class="mb-2"><br>
               au :
               <input type="date" name="endDate_expo" placeholder="date de fin" class="mb-2"><br>
               <textarea class="card-text mb-2" name="text_expo" rows="8" cols="80" placeholder="informations complémentaires"></textarea>
               <input type="text" name="expo_link" class="mb-2" placeholder="URL">
           </div>
           <button type="submit" name="addExpo" class="bg-success text-white p-3">publier</button>
         </div>
       </form>
       <div class="text-center mt-5">
        <h5>liste des expositions</h5>
       </div>
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
              <div class="d-flex justify-content-center">
                <form class="form" action="" method="post">
                  <input type="hidden" name="id_expo" value="<?php echo $expo['id_expo']; ?>">
                  <button href=<?php echo "../controller/editExpo.php?index=".$expo['id_expo']; ?> class="text-muted m-3"><i class="fas fa-edit" title="modifier"></i></button>
                </form>
                <form class="form" action="" method="post">
                  <input type="hidden" name="id_expo" value="<?php echo $expo['id_expo']; ?>">
                  <button type="submit" name="deleteExpo" class="text-muted m-3"><i class="fas fa-trash-alt" title="supprimer"></i></button>
                </form>
              </div>
            </div>
           </div>
       <?php } ?>
     </div>
   </div>
  </section>
<?php
  include "templates/footer.php";
?>
