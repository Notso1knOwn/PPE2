<?php session_start();
$PremFamille = "index";
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>2TAK Hardware</title>
  <link href="Style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Style/css/index.css" rel="stylesheet">
  <link rel="stylesheet" href="Style/css/menu.css">
  <link rel="stylesheet" href="Login-Logout/login.css">

</head>

<body>

  <?php require('Commun/php/header.php'); ?>

  <header class="masthead text-white text-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Le nouveau site de Hardware vous permettant de constituer votre propre configuration</h1>
        </div>
      </div>
    </div>
  </header>
  <!-- header -->

  <!-- Footer -->
  <footer class="py-5 bg-dark fixed-bottom">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; 2TAK Hardware 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="Style/jquery/jquery.min.js"></script>
  <script src="Style/bootstrap/js/bootstrap.bundle.min.js"></script>
  <?php require('Login-Logout/modal-connexion.php'); ?>
  <?php require('Login-Logout/modal-inscription.php'); ?>
  <script src="Commun/js/modal.js"></script>
  <script src="Commun/js/modal_inscription.js"></script>
</body>

</html>
