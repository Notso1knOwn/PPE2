<?php
session_start();
//require('../Commun/Menu.php');
$PremFamille = "Périphérique";
$Famille = "Clavier";
require('../Traitement-Ordinateur.php'); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Clavier | 2TAK Hardware</title>
  <link href="../Style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../Style/css/Ordinateur.css" rel="stylesheet">
  <link rel="stylesheet" href="../Style/css/Select-checkbox.css">
  <link rel="stylesheet" href="../Style/css/menu.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>

  <?php require('../Commun/header.php'); ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-12">
      <?php require('../Commun/Carousel.php'); ?>
      </div>
    <!-- col-lg-12 -->

      </div>
  <!-- row -->

    <div class="row">

    <div class="col-lg-3">
      <h1 id="Catégorie">Catégorie</h1>
      <div class="list-group">
        <form method="post" action="Clavier.php">
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
                <input type="checkbox" id="un" name="Marque[]" value="Corsair"/>Corsair</label>
              <label for="deux">
                <input type="checkbox" id="deux" name="Marque[]" value="Razer"/>Razer</label>
            </div>
            <!-- checkboxes -->
          </div>
          <!-- multiselect form-group -->
        </div>
      <!-- list-group-item -->

        <input type="submit" class="mx-auto btn btn-primary" name="btnSubmit" value="Filtrer">
      </form>
      </div>
      <!-- list-group -->
    </div>
    <!-- col-lg-3 -->

    <div class="col-lg-9">

      <div class="row">

      <?php if (isset($card)) {
        foreach ($card as $key) { ?>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <?php   $image = "../Images/Peripherique/Clavier/".$key['Modele'].".jpg";  ?>
          <a href="#"><img class="card-img-top image" src='<?php echo $image; ?>' alt=""></a>
          <div class="card-body">
            <h4 class="card-title text-center">
              <a href="#"><?php
              echo $key['Marque'];  echo " "; echo $key['Modele'];?></a>
            </h4>
          </div>
          <div class="card-footer">
            <p class="card-text"><?php echo $key['Prix']."€"; ?></p>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
      </div>
    <?php }unset($card);} ?>

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
