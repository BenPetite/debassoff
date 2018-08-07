<?php
function addPost(Array $billet, $bdd) {
  $req = $bdd->prepare("INSERT INTO billet(image_billet, titre_billet, tech_billet, format_billet, texte_billet, date_billet)
                        VALUES(:image_billet, :titre_billet, :tech_billet, :format_billet, :texte_billet, :date_billet)");
  $requete->execute([
    ":image_billet" => $billet["image_billet"],
    ":titre_billet" => $billet["titre_billet"],
    "tech_billet" => $billet["tech_billet"],
    "format_billet" => $billet["format_billet"],
    ":texte_billet" => $billet["texte_billet"],
    ":date_billet" => $billet["date_billet"]
  ]);
}

function deletePost(Array $billet, $bdd){
  $req = $bdd->prepare("DELETE FROM billet WHERE id_billet = ?");
  $req->execute([$billet['id_billet']]);
 }

// function editPost(){
//
// }

function getMessages($bdd){
    $req=$bdd->query('SELECT * FROM contact ORDER BY id_contact');
    $messages=$req->fetchall(PDO::FETCH_ASSOC);
      return $messages;
      }
