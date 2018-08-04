<?php
require_once "../model/connectionDB.php";
if(isset($_POST['submitMessage'])){
  contactForm($_POST, $bdd);
}
require "../view/contactView.php":
