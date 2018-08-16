<?php
require_once "model/connectionDB.php";
include "view/templates/nav.php";
include "view/templates/header.php";
function addPost($new, $bdd){
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
    var_dump($new);
?>
<form class="d-flex justify-content-center mt-3" action="" method="post" enctype="multipart/form-data">
  <div class="card" style="width: 40rem;">
    <div class="card-body">
        <input type="text" name="image_news" placeholder="nom.format" class="mb-2"><br>
        <input type="text" name="title_news" class="mb-2" placeholder="titre"><br>
        <input type="date" name="date_news" placeholder="date" class="mb-2"><br>
        <input type="text" name="tech_news" placeholder="techniques" class="mb-2"><br>
        <input type="text" name="format_news" placeholder="format" class="mb-2"><br>
        <textarea class="card-text mb-2" name="text_news" rows="8" cols="80" placeholder="informations complémentaires"></textarea>
    </div>
    <button type="submit" name="addPost" class="bg-success text-white p-3">publier</button>
  </div>
</form>
<?php
include "view/templates/footer.php";
 ?>
