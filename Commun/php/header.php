<?php

$spanCurrent = '<span class="sr-only">(current)</span>';

switch ($PremFamille) {
  case 'Ordinateur':
    $menu =  1;
    break;

  case 'CréerConfig':
    $menu =  2;
    break;

  case 'Composant':
    $menu = 3;
    break;

  case 'Périphérique':
    $menu = 4;
    break;

  case 'Panier':
    $menu = 5;
    break;

  default:
    $menu = 0;
    break;
} ?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <div class="dropdown">
      <?php $Brand = (isset($_SESSION['Identifiant'])) ? ('<button class="btn btn-secondary dropdown-toggle mybtn navbar-brand" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$_SESSION['Identifiant'].'</button>') : ('<a class="navbar-brand" href="index.php">2TAK Hardware</a>'); echo $Brand;?>

      <div class="mydropdown">
        <ul class="dropdown-menu dropdown-menu-center text-center">
          <li> <a href="<?php if($PremFamille != "index") {echo "..";}?>Utilisateur/Parametre.php" class="dropdown-item"> Paramètres </a> </li>
          <li> <a href="<?php if($PremFamille != "index") {echo "..";}?>Login-Logout/Déconnexion.php" class="dropdown-item"> Déconnexion </a> </li>
        </ul>
      </div>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link <?php if($menu == 0){echo "active";} ?>" href="<?php if($PremFamille != "index") {echo "../index.php";}?>">Accueil</a><?php if($menu == 0){echo $spanCurrent;} ?>
        </li>

        <li class="nav-item ">
          <div class="dropdown ">
            <button class="btn btn-secondary dropdown-toggle nav-link <?php if($menu == 1){echo "active";} ?> mybtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Ordinateurs
              <?php if($menu == 1){echo $spanCurrent;} ?>
            </button>

            <div class="mydropdown">
              <ul class="dropdown-menu dropdown-menu-center text-center">
                <li> <a href="<?php if($PremFamille != "index") {echo "../";}?>Ordinateur/Tour.php" class="dropdown-item"> Tour </a> </li>
                <li> <a href="<?php if($PremFamille != "index") {echo "../";}?>Ordinateur/Laptop.php" class="dropdown-item"> Laptop </a> </li>
              </ul>
            </div>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link <?php if($menu == 2){echo "active";} ?>" href="../CréerConfig.php">CréerConfig</a><?php if($menu == 2){echo $spanCurrent;} ?>
        </li>

        <li class="nav-item ">
          <div class="dropdown ">
            <button class="btn btn-secondary dropdown-toggle nav-link <?php if($menu == 3){echo "active";} ?> mybtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Composants
              <?php if($menu == 3){echo $spanCurrent;} ?>
            </button>

            <div class="mydropdown">
              <ul class="dropdown-menu dropdown-menu-center text-center">
                <li> <a href="<?php if($PremFamille != "index") {echo "../";}?>Composant/Processeur.php" class="dropdown-item"> Processeur </a> </li>
                <li> <a href="<?php if($PremFamille != "index") {echo "../";}?>Composant/Carte_Mère.php" class="dropdown-item"> Carte Mère </a> </li>
                <li> <a href="<?php if($PremFamille != "index") {echo "../";}?>/Composant/Carte_Graphique.php" class="dropdown-item"> Carte Graphique </a> </li>
                <li> <a href="<?php if($PremFamille != "index") {echo "../";}?>Composant/RAM.php" class="dropdown-item"> RAM </a> </li>
                <li> <a href="<?php if($PremFamille != "index") {echo "../";}?>Composant/Stockage.php" class="dropdown-item"> Stockage </a> </li>
                <li> <a href="<?php if($PremFamille != "index") {echo "../";}?>Composant/Refroidissement.php" class="dropdown-item"> Refroisissement </a> </li>
                <li> <a href="<?php if($PremFamille != "index") {echo "../";}?>Composant/Alimentation.php" class="dropdown-item"> Alimentation </a> </li>
                <li> <a href="<?php if($PremFamille != "index") {echo "../";}?>Composant/Boitier.php" class="dropdown-item"> Boitier </a> </li>
              </ul>
            </div>
          </div>
        </li>

        <li class="nav-item ">
          <div class="dropdown ">
            <button class="btn btn-secondary dropdown-toggle nav-link <?php if($menu == 4){echo "active";} ?> mybtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Périphériques
              <?php if($menu == 4){echo $spanCurrent;} ?>
            </button>

            <div class="mydropdown">
              <ul class="dropdown-menu dropdown-menu-center text-center">
                <li> <a href="<?php if($PremFamille != "index") {echo "../";}?>Périphérique/Casque.php" class="dropdown-item"> Ecran </a> </li>
                <li> <a href="<?php if($PremFamille != "index") {echo "../";}?>Périphérique/Casque.php" class="dropdown-item"> Clavier </a> </li>
                <li> <a href="<?php if($PremFamille != "index") {echo "../";}?>Périphérique/Casque.php" class="dropdown-item"> Souris </a> </li>
                <li> <a href="<?php if($PremFamille != "index") {echo "../";}?>Périphérique/Casque.php" class="dropdown-item"> Micro </a> </li>
                <li> <a href="<?php if($PremFamille != "index") {echo "../";}?>Périphérique/Casque.php" class="dropdown-item"> Casque </a> </li>
              </ul>
            </div>
          </div>
        </li>

        <li class="nav-item ">
          <?php
          $panier_para = ($menu == 5)?('active'):("");
          $Con_Para = (!isset($_SESSION['Identifiant'])) ? ("<button type='button' class='btn btn-secondary nav-link mybtn' id='btn_connexion' data-toggle='modal' data-target='#modal_connexion'>Connexion</button>") : ("<a class ='nav-link ".$panier_para."' href='../Utilisateur/Panier.php'>Panier</a>");
          ?>
          <?= $Con_Para ?>
        </li>
      </ul>
    </div>
  </div>
</nav>
