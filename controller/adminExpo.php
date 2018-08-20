<?php
require_once "../model/connectionDB.php";
require_once "../model/expo.php";

if(isset($_POST['addExpo'])){
  addExpo($_POST, $bdd);
  header('Location: ../view/adminView.php');
}

$expos=getExpos($bdd);

if(isset($_GET["index"])){
  $expo=getExpo($_GET, $bdd);
}

if(isset($_POST["deleteExpo"])){
  deleteExpo($_POST, $bdd);
}

include "../view/adminExpoView.php";
