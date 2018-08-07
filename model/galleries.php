<?php
function getGalleries($bdd){
  $req=$bdd->query('SELECT * FROM olgallery');
  $galleries=$req->fetchall(PDO::FETCH_ASSOC);
    return $galleries;
}
