<?php
require_once("../model/connectionDB.php");
  getMessages($bdd);
require("../view/messagesView.php");
