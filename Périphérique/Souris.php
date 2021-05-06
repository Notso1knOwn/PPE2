<?php //require('../Commun/Menu.php');
require('../Traitement-Peripherique.php'); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Ecran | 2TAK Hardware</title>
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
      <a class="navbar-brand" href="index.php">2TAK Hardware</a>
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
                  <li> <a href="../Ordinateur/Tour.php" class="dropdown-item"> Tour </a> </li>
                  <li> <a href="../Ordinateur/Laptop.php" class="dropdown-item"> Laptop </a> </li>
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
                  <li> <a href="Ecran.php" class="dropdown-item"> Ecran </a> </li>
                  <li> <a href="Clavier.php" class="dropdown-item"> Clavier </a> </li>
                  <li> <a href="Souris.php" class="dropdown-item"> Souris </a> </li>
                  <li> <a href="Micro.php" class="dropdown-item"> Micro </a> </li>
                  <li> <a href="Casque.php" class="dropdown-item"> Casque </a> </li>
                </ul>
              </div>
            </div>
          </li>

          <li class="nav-item ">
            <?php
            if (!isset($_SESSION['Identifiant'])) {
              echo "<a class ='nav-link' href='../Login-Logout/login.php'>Connexion</a>";
            }else{
              echo "<a class ='nav-link' href='../Paramètre.php'>Paramètre</a>";
            }
            ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

  <div class="row">

    <div class="col-lg-12">
      <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block img-fluid image_carousel" src="../Images/Peripherique/Ecran/BenQ.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid image_carousel" src="../Images/Peripherique/Ecran/Samsung.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid image_carousel" src="../Images/Peripherique/Ecran/Samsung2.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!-- col-lg-12 -->

  </div>
  <!-- row -->

  <div class="row">

    <div class="col-lg-3">
      <h1 id="Catégorie">Catégorie</h1>
      <div class="list-group">
        <form method="post" action="Ecran.php">
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
                <input type="checkbox" id="un" name="Marque[]" value="MSI"/>MSI</label>
              <label for="deux">
                <input type="checkbox" id="deux" name="Marque[]" value="Asus"/>Asus</label>
              <label for="trois">
                <input type="checkbox" id="trois" name="Marque[]" value="Aoc"/>Aoc</label>
            </div>
            <!-- checkboxes -->
          </div>
          <!-- multiselect form-group -->
        </div>
      <!-- list-group-item -->

      <!-- Formulaire Format -->
      <div class="list-group-item">
          <div class="multiselect">
            <div class="selectBox form-group" onclick="showCheckboxes('Taille')">
              <div class="form-control">Taille</div>
            <div class="overSelect"></div>
          </div>
          <!-- multiselect -->
          <div id="Taille" class="checkboxes">
            <label for="un">
              <input type="checkbox" id="un" name="Taille[]" value="24"/>24 pouces</label>
            <label for="deux">
              <input type="checkbox" id="deux" name="Taille[]" value="27"/>27 pouces</label>
            <label for="trois">
              <input type="checkbox" id="trois" name="Taille[]" value="+32"/>+32 pouces</label>
          </div>
          <!-- checkboxes -->
        </div>
        <!-- multiselect  -->
      </div>
      <!-- list-group-item -->

      <!-- Formulaire Format -->
      <div class="list-group-item">
          <div class="multiselect">
            <div class="selectBox form-group" onclick="showCheckboxes('Frequence')">
              <div class="form-control">Frequences</div>
            <div class="overSelect"></div>
          </div>
          <!-- multiselect -->
          <div id="Frequence" class="checkboxes">
            <label for="un">
              <input type="checkbox" id="un" name="Frequence[]" value="60"/>60 hz</label>
            <label for="deux">
              <input type="checkbox" id="deux" name="Frequence[]" value="75"/>75 hz</label>
            <label for="trois">
              <input type="checkbox" id="trois" name="Frequence[]" value="144"/>144 hz</label>
          </div>
          <!-- checkboxes -->
        </div>
        <!-- multiselect  -->
      </div>
      <!-- list-group-item -->

        <!-- Formulaire Processeur -->
        <div class="list-group-item">
            <div class="multiselect">
              <div class="selectBox form-group" onclick="showCheckboxes('Resolution')">
                <div class="form-control">Resolution</div>
              <div class="overSelect"></div>
            </div>
            <!-- multiselect -->
            <div id="Resolution" class="checkboxes">
              <label for="un">
                <input type="checkbox" id="un" name="Resolution[]" value="1920x1080"/>1920 x 1080</label>
              <label for="deux">
                <input type="checkbox" id="deux" name="Resolution[]" value="2560x1440"/>2560 x 1440</label>
              <label for="trois">
                <input type="checkbox" id="trois" name="Resolution[]" value="3840x2160"/>3840 x 2160</label>
            </div>
            <!-- checkboxes -->
          </div>
          <!-- multiselect form-group -->
        </div>
        <!-- list-group-item -->

        <div class="list-group-item">
            <div class="multiselect">
              <div class="selectBox form-group" onclick="showCheckboxes('Dalle')">
                <div class="form-control">Dalle</div>
              <div class="overSelect"></div>
            </div>
            <!-- multiselect -->
            <div id="Dalle" class="checkboxes">
              <label for="un">
                <input type="checkbox" id="un" name="Dalle[]" value="Incurvee"/>Incurvée</label>
              <label for="deux">
                <input type="checkbox" id="deux" name="Dalle[]" value="Full_HD"/>Full HD</label>
              <label for="trois">
                <input type="checkbox" id="trois" name="Dalle[]" value="TFT_TN"/>TFT TN</label>
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

      <?php if (isset($card)) {
        foreach ($card as $key) { ?>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <?php
          $image = "../Images/Peripherique/Ecran/".$key['Modele'].".jpg"; ?>
          <a href="#"><img class="card-img-top image" src='<?php echo $image; ?>' alt=""></a>
          <div class="card-body">
            <h4 class="card-title text-center">
              <a href="#"><?php
              echo $key['Marque'];  echo " "; echo $key['Modele'];?></a>
            </h4>
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
