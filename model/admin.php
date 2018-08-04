<?php
// function addPost(){}
//
// function deletePost(){}
//
// function editPost(){}

function getMessages($bdd){
    $req=$bdd->query('SELECT * FROM contact ORDER BY id_contact');
    $messages=$req->fetchall(PDO::FETCH_ASSOC);
      return $messages;
      }
