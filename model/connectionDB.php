<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=debassoff;charset=utf8', 'root', '');
  }
catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
  }
?>
