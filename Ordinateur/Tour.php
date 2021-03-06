<?php
session_start();
//require('../Commun/Menu.php');
$PremFamille = "Ordinateur";
$Famille = "Tour";
require('../Traitement-Ordinateur.php');
// require('../Commun/php/Traitement-Login-Register.php');
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Tour | 2TAK Hardware</title>
  <link rel="icon" href="../Icones/icons8-processeur-64.png">
  <link href="../Style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../Style/css/Ordinateur.css" rel="stylesheet">
  <link rel="stylesheet" href="../Style/css/Select-checkbox.css">
  <link rel="stylesheet" href="../Style/css/menu.css">
  <link rel="stylesheet" href="../Style/css/index.css">
  <link rel="stylesheet" href="../Login-Logout/login.css" />

</head>

<body>

<?php require('../Commun/php/header.php'); ?>

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
        <form method="post" action="Tour.php">
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
                <input type="checkbox" id="un" name="Format[]" value="Mini"/>Mini-PC</label>
              <label for="deux">
                <input type="checkbox" id="deux" name="Format[]" value="Bureautique"/>PC Tour bureautique</label>
              <label for="trois">
                <input type="checkbox" id="trois" name="Format[]" value="Gamer"/>Gamer</label>
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

<?php require('../Commun/php/footer.php'); ?>
<?php require('../Login-Logout/modal-connexion.php'); ?>
<?php require('../Login-Logout/modal-inscription.php'); ?>

</body>
<?php require('../Commun/php/require_script.php'); ?>

</html>
