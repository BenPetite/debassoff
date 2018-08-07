<?php
function getPost($_GET, $id){
  $id=$_GET["index"];
  // var_dump($_GET);
  $req = $bdd->prepare('SELECT * FROM billet WHERE id=?');
  // var_dump($req);
  $req->execute(array($id));
  $livre = $reponse->fetch();
}
 ?>
