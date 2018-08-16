<!-- <?php $title="expositions"; ?>
<?php
  include("templates/nav.php");
  include("templates/header.php");
?>
  <form class="d-flex justify-content-center mt-3" action="" method="post" enctype="multipart/form-data">
    <div class="card" style="width: 40rem;">
      <div class="card-body">
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
<?php
  include("templates/footer.php");
?> -->
