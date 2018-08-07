<?php
function getNews($bdd){
  $req=$bdd->query('SELECT * FROM news');
  $news=$req->fetchall(PDO::FETCH_ASSOC);
    return $news;
}
// function getPost(){
//
// }
