<?php
require_once "../model/connectionDB.php";
require_once "../model/admin.php";

if(isset($_POST["addPost"])){
  addPost($_POST, $bdd);
  }
include "../view/addPostView.php";
