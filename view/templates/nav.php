<!doctype html>
 <html class="no-js" lang="fr">

 <head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title></title>
   <meta name="description" content="dessins, tableaux, bijoux, expositions d'Anne Sophie de Bassoff">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
   <link rel="manifest" href="site.webmanifest">
   <link rel="apple-touch-icon" href="icon.png">
   <!-- Place favicon.ico in the root directory -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="css/normalize.css">
   <link rel="stylesheet" href="css/main.css">
 </head>
 <body>
   <!--[if lte IE 9]>
     <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
   <![endif]-->
 <!-- **********NAV********** -->
  <nav class="d-flex justify-content-around mt-3 mb-2 bg-white sticky-top">
    <ul class="nav nav-pills">
      <?php
      // $req=$bdd->prepare('SELECT id_admin FROM asdb WHERE id_admin=?');
      // $administrateur=$req->fetch(PDO::FETCH_ASSOC);
        // return $administrateur;
        // var_dump($administrateur);
       ?>
      <li class="nav-item mx-2">
        <a class="nav-link active bg-success text-white mx-2" href="../controller/index.php">accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="../controller/bio.php">biographie</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          expositions
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../controller/expo.php">expositions</a>
          <a class="dropdown-item" href="../controller/galleries.php">galeries en ligne</a>
        </div>
        <li class="nav-item">
          <div class="">
            <a href="https://twitter.com/DBassoff" class="text-dark fab fa-twitter-square m-2" title="twitter"></a>
            <!-- <a href="" class="text-dark fab fa-instagram m-2"></a> -->
            <a href="https://www.facebook.com/Mona.Lisa.bijoux" class="text-dark fab fa-facebook-square m-2" title="facebook"></a>
          </div>
        </li>
      </li>
      <li class="nav-item mx-2">
        <a class="nav-link active bg-success text-white mx-2" href="../controller/contact.php">contact</a>
      </li>
      <!-- <div class="">
        <a href="https://twitter.com/DBassoff" class="text-dark fab fa-twitter-square m-2"></a>
        <a href="" class="text-dark fab fa-instagram m-2"></a>
        <a href="https://www.facebook.com/Mona.Lisa.bijoux" class="text-dark fab fa-facebook-square m-2"></a>
      </div> -->
    </ul>
  </nav>
 <!-- **********/NAV********** -->
