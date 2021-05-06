<?php //require('../Commun/Menu.php');
$PremFamille = "Ordinateur";
$Famille = "Laptop";
require('../Traitement-Ordinateur.php'); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Laptop | 2TAK Hardware</title>
  <link href="../Style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../Style/css/Ordinateur.css" rel="stylesheet">
  <link rel="stylesheet" href="../Style/css/Select-checkbox.css">
  <link rel="stylesheet" href="../Style/css/menu.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <?php $Brand = (isset($_SESSION['Identifiant'])) ? ('<a class="navbar-brand" href="Paramètre.php">'.$_SESSION['Identifiant'].'</a>') : ('<a class="navbar-brand" href="index.php">2TAK Hardware</a>'); echo $Brand;?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Accueil</a>
          </li>

          <li class="nav-item ">
            <div class="dropdown ">
              <button class="btn btn-secondary dropdown-toggle nav-link active mybtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ordinateurs
                <span class="sr-only">(current)</span>
              </button>

              <div class="mydropdown">
                <ul class="dropdown-menu dropdown-menu-center text-center">
                  <li> <a href="Tour.php" class="dropdown-item"> Tour </a> </li>
                  <li> <a href="Laptop.php" class="dropdown-item"> Laptop </a> </li>
                </ul>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../CréerConfig.php">CréerConfig</a>
          </li>

          <li class="nav-item ">
            <div class="dropdown ">
              <button class="btn btn-secondary dropdown-toggle nav-link mybtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Composants
              </button>

              <div class="mydropdown">
                <ul class="dropdown-menu dropdown-menu-center text-center">
                  <li> <a href="../Composant/Processeur.php" class="dropdown-item"> Processeur </a> </li>
                  <li> <a href="../Composant/Carte_Mère.php" class="dropdown-item"> Carte Mère </a> </li>
                  <li> <a href="../Composant/Carte_Graphique.php" class="dropdown-item"> Carte Graphique </a> </li>
                  <li> <a href="../Composant/RAM.php" class="dropdown-item"> RAM </a> </li>
                  <li> <a href="../Composant/Stockage.php" class="dropdown-item"> Stockage </a> </li>
                  <li> <a href="../Composant/Refroidissement.php" class="dropdown-item"> Refroisissement </a> </li>
                  <li> <a href="../Composant/Alimentation.php" class="dropdown-item"> Alimentation </a> </li>
                  <li> <a href="../Composant/Boitier.php" class="dropdown-item"> Boitier </a> </li>
                </ul>
              </div>
            </div>
          </li>

          <li class="nav-item ">
            <div class="dropdown ">
              <button class="btn btn-secondary dropdown-toggle nav-link mybtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Périphériques
              </button>

              <div class="mydropdown">
                <ul class="dropdown-menu dropdown-menu-center text-center">
                  <li> <a href="../Périphérique/Casque.php" class="dropdown-item"> Ecran </a> </li>
                  <li> <a href="../Périphérique/Casque.php" class="dropdown-item"> Clavier </a> </li>
                  <li> <a href="../Périphérique/Casque.php" class="dropdown-item"> Souris </a> </li>
                  <li> <a href="../Périphérique/Casque.php" class="dropdown-item"> Micro </a> </li>
                  <li> <a href="../Périphérique/Casque.php" class="dropdown-item"> Casque </a> </li>
                </ul>
              </div>
            </div>
          </li>

          <li class="nav-item ">
            <?php
            $Con_Para = (!isset($_SESSION['Identifiant'])) ? ("<a class ='nav-link' href='../Login-Logout/login.php'>Connexion</a>") : ("<a class ='nav-link' href='../Login-Logout/Déconnexion.php'>Déconnexion</a>");
            echo $Con_Para;?>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

  <div class="row">

    <div class="col-lg-12">
      <?php require('../Commun/php/Carousel.php'); ?>
    </div>
    <!-- col-lg-12 -->

  </div>
  <!-- row -->

  <div class="row">

    <div class="col-lg-3">
      <h1 id="Catégorie">Catégorie</h1>
      <div class="list-group">
        <form method="post" action="Laptop.php">
        <!-- Formulaire Marque -->
        <div class="list-group-item">
            <div class="multiselect">
              <div class="selectBox form-group" onclick="showCheckboxes('Marque')">
                <div class="form-control">Marque</div>
              <div class="overSelect"></div>
            </div>
            <!-- multiselect -->
            <div id="Marque" class="checkboxes">
              <label for="un">
                <input type="checkbox" id="un" name="Marque[]" value="Apple"/>Apple</label>
              <label for="deux">
                <input type="checkbox" id="deux" name="Marque[]" value="Asus"/>Asus</label>
              <label for="trois">
                <input type="checkbox" id="trois" name="Marque[]" value="HP"/>HP</label>
              <label for="quatre">
                <input type="checkbox" id="quatre" name="Marque[]" value="MSI"/>MSI</label>
            </div>
            <!-- checkboxes -->
          </div>
          <!-- multiselect form-group -->
        </div>
      <!-- list-group-item -->

        <!-- Formulaire Format -->
        <div class="list-group-item">
            <div class="multiselect">
              <div class="selectBox form-group" onclick="showCheckboxes('Format')">
                <div class="form-control">Format</div>
              <div class="overSelect"></div>
            </div>
            <!-- multiselect -->
            <div id="Format" class="checkboxes">
              <label for="un">
                <input type="checkbox" id="un" name="Format[]" value="Mini"/>PC Portable</label>
              <label for="deux">
                <input type="checkbox" id="deux" name="Format[]" value="Bureautique"/>PC Portable Gamer</label>
              <label for="trois">
                <input type="checkbox" id="trois" name="Format[]" value="Gamer"/>Tablette PC</label>
            </div>
            <!-- checkboxes -->
          </div>
          <!-- multiselect  -->
        </div>
        <!-- list-group-item -->

        <!-- Formulaire Processeur -->
        <div class="list-group-item">
            <div class="multiselect">
              <div class="selectBox form-group" onclick="showCheckboxes('Processeur')">
                <div class="form-control">Processeur</div>
              <div class="overSelect"></div>
            </div>
            <!-- multiselect -->
            <div id="Processeur" class="checkboxes">
              <label for="un">
                <input type="checkbox" id="un" name="Processeur[]" value="Intel Pentium"/>Intel Pentium</label>
              <label for="deux">
                <input type="checkbox" id="deux" name="Processeur[]" value="Intel Core i3"/>Intel Core i3</label>
              <label for="trois">
                <input type="checkbox" id="trois" name="Processeur[]" value="Intel Core i5"/>Intel Core i5</label>
              <label for="quatre">
                <input type="checkbox" id="quatre" name="Processeur[]" value="Intel Core i7"/>Intel Core i7</label>
              <label for="cinq">
                <input type="checkbox" id="cinq" name="Processeur[]" value="Intel Core i9"/>Intel Core i9</label>
              <label for="six">
                <input type="checkbox" id="six" name="Processeur[]" value="AMD Ryzen 5"/>AMD Ryzen 5</label>
              <label for="sept">
                <input type="checkbox" id="sept" name="Processeur[]" value="AMD Ryzen 7"/>AMD Ryzen 7</label>
              <label for="huit">
                <input type="checkbox" id="huit" name="Processeur[]" value="AMD Ryzen 9"/>AMD Ryzen 9</label>
            </div>
            <!-- checkboxes -->
          </div>
          <!-- multiselect form-group -->
        </div>
        <!-- list-group-item -->

        <div class="list-group-item">
            <div class="multiselect">
              <div class="selectBox form-group" onclick="showCheckboxes('Carte_graphique')">
                <div class="form-control">Carte graphique</div>
              <div class="overSelect"></div>
            </div>
            <!-- multiselect -->
            <div id="Carte_graphique" class="checkboxes">
              <label for="un">
                <input type="checkbox" id="un" name="Carte_graphique[]" value="Intel HD"/>Chipset Intel</label>
              <label for="deux">
                <input type="checkbox" id="deux" name="Carte_graphique[]" value="GTX 1060"/>Nvidia GeForce GTX 1060</label>
              <label for="trois">
                <input type="checkbox" id="trois" name="Carte_graphique[]" value="GTX 1070"/>Nvidia GeForce GTX 1070</label>
              <label for="quatre">
                <input type="checkbox" id="quatre" name="Carte_graphique[]" value="GTX 1080"/>Nvidia GeForce GTX 1080</label>
              <label for="cinq">
                <input type="checkbox" id="cinq" name="Carte_graphique[]" value="RTX 2060"/>Nvidia GeForce RTX 2060</label>
              <label for="six">
                <input type="checkbox" id="six" name="Carte_graphique[]" value="RTX 2070"/>Nvidia GeForce RTX 2070</label>
              <label for="sept">
                <input type="checkbox" id="sept" name="Carte_graphique[]" value="RTX 2080"/>Nvidia GeForce RTX 2080</label>
              <label for="huit">
                <input type="checkbox" id="huit" name="Carte_graphique[]" value="Chipset AMD"/>Chipset AMD</label>
              <label for="huit">
                <input type="checkbox" id="huit" name="Carte_graphique[]" value="Radeon Pro"/>AMD Radeon Pro</label>
              <label for="neuf">
                <input type="checkbox" id="neuf" name="Carte_graphique[]" value="Radeon Pro Vega"/>AMD Radeon Pro Vega</label>
              <label for="dix">
                <input type="checkbox" id="dix" name="Carte_graphique[]" value="Radeon Pro RX 5700"/>AMD Radeon Pro RX 5700</label>
            </div>
            <!-- Carte_graphique -->
          </div>
          <!-- multiselect -->
        </div>

        <input type="submit" class="mx-auto btn btn-primary" name="btnSubmit" value="Filtrer">
      </form>
      </div>
      <!-- list-group -->
    </div>
    <!-- col-lg-3 -->

    <div class="col-lg-9">

      <div class="row">

        <?php require('../Commun/php/Card-Produit.php'); ?>

    </div>
    <!-- row -->
    </div>
    <!-- col-lg-9 -->
  </div>
  <!-- row -->



  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer id="footer" class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; 2TAK Hardware 2020</p>
    </div>
    <!-- /.container -->
  </footer>

<!-- script pour select multiple checkbox -->
  <script type="text/javascript">
  <!--
    var Type , expanded = false;

    function showCheckboxes(Type) {
      var checkboxes = document.getElementById(Type);
      expanded ? (checkboxes.style.display = "none" , expanded = false) : (checkboxes.style.display = "block" , expanded = true);
    }
    -->
  </script>


  <!-- Bootstrap core JavaScript -->
  <script src="../Style/jquery/jquery.min.js"></script>
  <script src="../Style/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
