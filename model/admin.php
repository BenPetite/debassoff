<?php
// ajouter un post
function addPost($new, $bdd) {
  $new=$_POST;
  $req = $bdd->prepare("INSERT INTO news(image_news, title_news, date_news, tech_news, format_news, text_news)
                        VALUES(:image_news, :title_news, :date_news, :tech_news, :format_news, :text_news)");
  $req->execute(array(
    ":image_news" => $new["image_news"],
    ":title_news" => $new["title_news"],
    ":date_news" => $new["date_news"],
    ":tech_news" => $new["tech_news"],
    ":format_news" => $new["format_news"],
    ":text_news" => $new["text_news"]
  ));
}

// supprimer un post
function deletePost($dNews, $bdd){
  $id=$_POST;
  $req = $bdd->prepare("DELETE FROM news WHERE id_news=?");
  $req->execute([$dNews['id_news']]);
  return $dNews;
}

// modifier un post
  function editPost($bdd){
    $id=$_POST["id_news"];
    $req=$bdd->prepare('UPDATE news
                        SET title_news = :newTitle, image_news = :newImage, date_news = :newDate, tech_news = :newTech,
                        format_news = :newFormat, text_news = :newText
                        WHERE id_news = :newId');
    $req->execute(array(
    ':newId' => $newId,
    ':newTitle' => $newTitle,
  	':newImage' => $newImage,
  	':newDate' => $newDate,
    ':newTech' => $newTech,
    ':newFormat' => $newFormat,
    ':newText' => $newText,

	));
}

// afficher les posts
function getNews($bdd){
  $req=$bdd->query('SELECT * FROM news ORDER BY date_news DESC');
  $news=$req->fetchall(PDO::FETCH_ASSOC);
    return $news;
}

// afficher les messages
function getMessages($bdd){
  $req=$bdd->query('SELECT * FROM contact ORDER BY date_contact DESC');
  $messages=$req->fetchall(PDO::FETCH_ASSOC);
    return $messages;
}

// supprimer un message
if(isset($_POST["deleteMessage"])){
function deleteMessage(array $dMessage, $bdd){
  $id=$_POST;
  $req = $bdd->prepare("DELETE FROM contact WHERE id_contact=?");
  $req->execute(array($dMessage["id_contact"]));
 }
}
