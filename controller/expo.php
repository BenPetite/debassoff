<?php
require_once "../model/connectionDB.php";
require_once "../model/expo.php";
$expos=getExpos($bdd);
include "../view/expoView.php";
 
