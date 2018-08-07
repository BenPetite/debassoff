<?php
require_once "../model/connectionDB.php";
require_once "../model/admin.php";
$messages=getMessages($bdd);
include "../view/messagesView.php";
