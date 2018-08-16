<?php
require_once "../model/connectionDB.php";
require_once "../model/admin.php";

$news=getNews($bdd);

include "../view/indexView.php";
