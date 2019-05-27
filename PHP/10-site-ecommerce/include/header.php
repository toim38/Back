<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= URL ?>include/css/style.css">

    <title>Bienvenue dans ma boutique, wouhahoo !!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Bienvenue dans ma boutique, wesh !!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" 
  aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample04">
    <ul class="navbar-nav mr-auto">
<?php if(internauteEstConnecte()): //acces membre connecté non ADMIN  ?>




      <li class="nav-item active">
        <a class="nav-link" href="<?=URL?>boutique.php">boutique</a>
      </li> 
      <li class="nav-item active">
        <a class="nav-link" href="<?=URL?>profil.php">profil</a>
      </li> 
      <li class="nav-item active">
        <a class="nav-link" href="<?=URL?>panier.php">panier</a>
      </li> 
      <li class="nav-item active">
        <a class="nav-link" href="<?=URL?>connexion.php?action=deconnexion">deconnexion</a>
      </li> 
<?php else: ?>
<li class="nav-item active">
        <a class="nav-link" href="<?=URL?>inscription.php?">Inscription</a>
<li class="nav-item active">
        <a class="nav-link" href="<?=URL?>connexion.php?">connexion</a>
      </li> 


<?php endif ; ?>


<?php  if(internauteEstConnecteEtEstAdmin()):?>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">BACK-OFFICE</a>
        <div class="dropdown" aria-labelledby="true"
        aria-expanded="false"> BACK OFFICE </a>
          <div class="dropdown-menu"aria-labelledby= "dropdown04">
          
          <a class="dropdown-item" href="<?=URL?>admin/gestion_boutique.php">GESTION BOUTIQUE</a>
          <a class="dropdown-item"href="<?=URL?>admin/gestion_commande.php">GESTION commande</a>">Something else here</a>
          <a class="dropdown-item"href="<?=URL?>admin/gestion_membre.php">GESTION membre</a>">Something else here</a>
        </div>
      </li>
      <?php endif ; ?>
    </ul>
    <form class="form-inline my-2 my-md-0">
      <input class="form-control" type="text" placeholder="Search">
    </form>
  </div>
</nav>

<section class="container mon-conteneur">


