<?php
require_once "../model/connectionDB.php";
require_once "../model/contact.php";
require_once "../model/secure.php";

  if(isset($_POST['submitMessage'])){
    contactForm($_POST, $bdd);
  }

require "../view/contactView.php";
