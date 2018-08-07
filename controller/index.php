<?php
require_once "../model/connectionDB.php";
require_once "../model/index.php";

$news=getNews($bdd);

include "../view/indexView.php";
