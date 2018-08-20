<?php
require_once "../model/connectionDB.php";
require_once "../model/galleries.php";

$galleries=getGalleries($bdd);

if(isset($_POST["addGallery"])){
  $gallery=addGallery($_POST, $bdd);
}

if(isset($_POST["deleteGallery"])){
  deleteGallery($_POST, $bdd);
}

include "../view/adminGalleryView.php";
