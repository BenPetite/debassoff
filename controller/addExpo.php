<?php
require_once "../model/connectionDB.php";
require_once "../model/expo.php";
if(isset($_POST['addExpo'])){
  addExpo($_POST, $bdd);
}
include "../view/addExpoView.php";
 ?>
