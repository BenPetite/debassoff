<?php
function getExpos($bdd){
  $req=$bdd->query('SELECT * FROM expo ORDER BY startDate_expo DESC');
  $expos=$req->fetchall(PDO::FETCH_ASSOC);
    return $expos;
}

  function getExpo($expo, $bdd){
  $id=$_GET["index"];
  $req = $bdd->prepare('SELECT * FROM expo WHERE id=?');
  $req->execute(array($id));
  $expo = $req->fetch();
  return $expo;
}

function addExpo(array $expo, $bdd) {
  $req = $bdd->prepare("INSERT INTO expo(title_expo, place_expo, city_expo, country_expo, startDate_expo, endDate_expo, text_expo, expo_link)
                        VALUES(:title_expo, :place_expo, :city_expo, :country_expo, :startDate_expo, :endDate_expo, :text_expo, :expo_link)");
  $req->execute([
    ":title_expo" => $expo["title_expo"],
    ":place_expo" => $expo["place_expo"],
    ":city_expo" => $expo["city_expo"],
    ":country_expo" => $expo["country_expo"],
    ":startDate_expo" => $expo["startDate_expo"],
    ":endDate_expo" => $expo["endDate_expo"],
    ":text_expo" => $expo["text_expo"],
    ":expo_link" => $expo["expo_link"]
  ]);
}

  function deleteExpo(array $dExpo, $bdd){
    $id=$_POST["id_expo"];
    $req=$bdd->prepare('DELETE FROM expo WHERE id_expo=?');
    $req->execute([$dExpo["id_expo"]]);
  }
