<?php
function addPost(Array $newPost, $bdd) {
  $req = $bdd->prepare("INSERT INTO billet(title_news, date_news, tech_news, format_news, text_news)
                        VALUES(:title_news, :date_news, :tech_news, :format_news, :text_news)");
  $req->execute([
    // ":image_news" => $newPost["image_news"],
    ":title_news" => $newPost["title_news"],
    ":date_news" => $newPost["date_news"],
    ":tech_news" => $newPost["tech_news"],
    ":format_news" => $newPost["format_news"],
    ":text_news" => $newPost["text_news"]
  ]);
}

// function deletePost(Array $deletePost, $bdd){
//   $req = $bdd->prepare("DELETE FROM news WHERE id_news = ?");
//   $req->execute([$deletePost['id_news']]);
//  }

// function editPost(){
//
// }
function getNews($bdd){
  $req=$bdd->query('SELECT * FROM news');
  $news=$req->fetchall(PDO::FETCH_ASSOC);
    return $news;
}

function getMessages($bdd){
    $req=$bdd->query('SELECT * FROM contact');
    $messages=$req->fetchall(PDO::FETCH_ASSOC);
      return $messages;
      }
