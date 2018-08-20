<?php
require_once "../model/connectionDB.php";
require_once "../model/expo.php";

if(isset($_POST["editExpo"])){
  editExpo($_POST, $bdd);
}

include "../view/editExpoView.php";
 ?>
