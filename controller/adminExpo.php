<?php
require_once "../model/connectionDB.php";
require_once "../model/expo.php";

if(isset($_POST['addExpo'])){
  addExpo($_POST, $bdd);
}

$expos=getExpos($bdd);

if(isset($_GET["index"])){
  $expo=getExpo($_GET, $bdd);
}

if(isset($_POST["deleteExpo"])){
  $dExpo=deleteExpo($_POST, $bdd);
}

include "../view/adminExpoView.php";
