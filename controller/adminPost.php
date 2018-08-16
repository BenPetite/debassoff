<?php
require_once "../model/connectionDB.php";
// require_once "../model/index.php";
require_once "../model/admin.php";
require_once "../model/image.php";

$news=getNews($bdd);

if(isset($_POST["addPost"])){
  addPost($_POST, $bdd);
  }

if(isset($_POST["deletePost"])){
  deletePost($_POST, $bdd);
}

if(isset($_POST['editPost'])){
  editPost($_POST, $bdd);
}

include "../view/adminPostsView.php";
// include "../essaipost.php";
