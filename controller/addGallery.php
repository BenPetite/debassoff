<?php
require_once "../model/connectionDB.php";
require_once "../model/galleries.php";
if(isset($_POST["addGallery"])){
  $gallery=addGallery($_POST, $bdd);
}
include "../view/addGalleryView.php";
 ?>
