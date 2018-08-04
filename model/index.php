<?php
function getPosts($bdd){
  $req=$bdd->query('SELECT * FROM billet ORDER BY id_billet DESC');
  $billets=$req->fetchall(PDO::FETCH_ASSOC);
    return $billets;
}

// function getPost(){
//
// }
