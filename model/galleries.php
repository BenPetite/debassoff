<?php
function getGalleries($bdd){
  $req=$bdd->query('SELECT * FROM olgallery');
  $galleries=$req->fetchall(PDO::FETCH_ASSOC);
    return $galleries;
}

function addGallery(Array $gallery, $bdd) {
  $req = $bdd->prepare("INSERT INTO olgallery(olgallery_name, olgallery_link, olgallery_infos)
                        VALUES(:olgallery_name, :olgallery_link, :olgallery_infos)");
  $req->execute([
    ":olgallery_name" => $gallery["olgallery_name"],
    ":olgallery_link" => $gallery["olgallery_link"],
    ":olgallery_infos" => $gallery["olgallery_infos"]
  ]);
}

function deleteGallery(array $dGallery, $bdd){
  $id=$_POST;
  $req=$bdd->prepare("DELETE FROM olgallery WHERE id_olgallery=?");
  $req->execute(array($dGallery["id_olgallery"]));}
?>
