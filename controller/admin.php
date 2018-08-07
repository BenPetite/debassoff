<?php
require_once("../model/connectionDB.php");

if(isset($_POST["addPost"])){
  addPost($_POST, $bdd);
  }

if(isset($_POST["deletePost"])) {
  deletePost($_POST, $bdd);
  }

// $messages=getMessages($bdd);

// include "../view/messagesView.php";
include "../view/addPostView.php";
