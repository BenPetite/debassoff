<?php
$description="dessins d'Anne Sophie de de Bassoff";
$title="dessin";
  include "templates/nav.php";
  include "templates/header.php";
 ?>
  <section class="d-flex justify-content-center mt-3 text-justify">
    <div class="card" style="width: 39rem;">
      <div class="card-body">
        <h5 class="card-title text-center">dessin</h5>
      <div class="dropdown-divider mt-3 mb-4"></div>
        <div class="d-flex justify-content-around align-items-center py-2">
          <img id="id1" class = "popup border" src="../public/img/dessin1.gif" alt="le loup (encres et feutre)" width="180" title="cliquez pour agrandir">
          <img id="id2" class = "popup border" src="../public/img/dessin2.jpg" alt="sans titre" width="180" title="cliquez pour agrandir">
          <img id="id3" class="popup border" src="../public/img/dessin3.jpg" alt="sans titre" width="180" title="cliquez pour agrandir">
          <div id="myModal" class="modal">
            <span class="close">×</span>
            <img class="modal-content" id="img01">
          <div id="caption"></div>
          </div>
        </div>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </section>
 <?php
  include "templates/footer.php";
?>
