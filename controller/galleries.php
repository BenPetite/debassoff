<?php
require_once "../model/connectionDB.php";
require_once "../model/galleries.php";
$galleries=getGalleries($bdd);
include "../view/GalleriesView.php";
