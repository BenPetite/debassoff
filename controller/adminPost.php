<?php
require_once "../model/connectionDB.php";
require_once "../model/admin.php";
require_once "../model/image.php";

  $news=getNews($bdd);

  if(isset($_POST["addPost"])){
    addPost($_POST, $bdd);
    }

  if(isset($_POST["deletePost"])){
    deletePost($_POST, $bdd);
    header('Location: ../controller/adminPost.php');
  }

include "../view/adminPostsView.php";
