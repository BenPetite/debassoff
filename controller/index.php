<?php
require_once("../model/connectionDB.php");
$billets=getPosts($bdd);
// $post=getPost();
require("../view/indexView.php");
