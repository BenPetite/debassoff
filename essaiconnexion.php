<?php
require "model/connectionDB.php";
include "view/templates/nav.php";
include "view/templates/header.php";

if(isset($_FILES['submitImage'])){
  $dossier = 'upload/';
  $fichier = basename($_FILES['image']['name']);
  $taille_maxi = ["1 048 576"];
  $taille = filesize($_FILES['image']['tmp_name']);
  $extensions = array(['.png'], ['.gif'], ['.jpg'], ['.jpeg']);
  $extension = strrchr($_FILES['image']['name'], ['.']);
}
  //Début des vérifications de sécurité...
   if(!in_array($extension, $extensions)){
        $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
   }
   if($taille>$taille_maxi){
        $erreur = 'Le fichier est trop gros...';
   }
  // if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
  // {
  //      //On formate le nom du fichier ici...
  //      $fichier = strtr($fichier,
  //           'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
  //           'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
  //      $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
  //      if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
  //      {
  //           echo 'Upload effectué avec succès !';
  //      }
  //      else //Sinon (la fonction renvoie FALSE).
  //      {
  //           echo 'Echec de l\'upload !';
  //      }
  // }
  // else
  // {
  //      echo $erreur;
   // }
  ?>
<section>
<form method="POST" action="" enctype="multipart/form-data">
     <input type="hidden" name="MAX_FILE_SIZE" value="1 048 576"><!--1 Mo-->
     <input type="file" name="image">
     <input type="text" name="titre_image" value="" placeholder=" titre">
     <textarea name="infos_image" rows="8" cols="80" placeholder=" infos"></textarea>
     <button type="submit" name="submitImage">envoyer</button>

</form>
</section>
<?php
  var_dump($_FILES);
include "view/templates/footer.php";
?>
