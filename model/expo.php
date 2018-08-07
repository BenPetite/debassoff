<?php
function getExpos($bdd){
  $req=$bdd->query('SELECT * FROM expo');
  $expos=$req->fetchall(PDO::FETCH_ASSOC);
    return $expos;
}

function addExpo(Array $expo, $bdd) {
  $req = $bdd->prepare("INSERT INTO expo(title_expo, place_expo, city_expo, country_expo, startDate_expo, endDate_expo, text_expo)
                        VALUES(:title_expo, :place_expo, :city_expo, :country_expo, :startDate_expo, :endDate_expo, :text_expo)");
  $req->execute([
    ":title_expo" => $expo["title_expo"],
    ":place_expo" => $expo["place_expo"],
    ":city_expo" => $expo["city_expo"],
    ":country_expo" => $expo["country_expo"],
    ":startDate_expo" => $expo["startDate_expo"],
    ":endDate_expo" => $expo["endDate_expo"],
    ":text_expo" => $expo["text_expo"]
  ]);
}
