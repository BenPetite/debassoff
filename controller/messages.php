<?php
require_once "../model/connectionDB.php";
require_once "../model/admin.php";

  $messages=getMessages($bdd);

  if(isset($_POST["deleteMessage"])){
    deleteMessage($_POST, $bdd);
  }

include "../view/messagesView.php";
