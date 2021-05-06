<?php
session_start();
//require('../Commun/Menu.php');
$PremFamille = "Panier";
$Famille = "Panier";

if (isset($_POST)) {
  foreach ($_POST as $key => $value) {
    if ($key != "Valider") {
      $verif = settype($value, 'int');
      if (isset($_SESSION['panier'][$key])) {
        if($verif == true){
          $_SESSION['panier'][$key]['Quantite'] = $value;
        }
        if($value == 0){
          unset($_SESSION['panier'][$key]);
        }
      }
    }
  }
}


$to      = 'masvidal.adrien@hotmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = array(
    'From' => 'tic66@hotmail.com',
    'Reply-To' => 'tic66@hotmail.com',
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);

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

</head>

<body>

<?php require('../Commun/php/header.php'); ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <h1 class="mx-auto mt-5">Votre Panier</h1>
    </div>

    <div class="row">
      <form class="form-group form_panier" action="#" method="post">
      <table class="table table-bordered my-5">
        <thead>
          <tr>
            <th scope="col">Produit</th>
            <th scope="col">Quantité</th>
            <th scope="col">Prix</th>
            <th scope="col">Supprimer</th>
          </tr>
        </thead>

        <?php if (isset($_SESSION['panier'])) { ?>
        <tbody>
            <?php foreach ($_SESSION['panier'] as $FirstKey => $FirstValue): ?>
                <tr>
                  <?php   $image = "../Images/".$FirstValue['PremFamille']."/".$FirstValue['Famille']."/".$FirstValue['Modele'].".jpg";  ?>
                  <th> <img src="<?= $image ?>" class="image-panier"> <p class=""><?= $FirstValue['Modele'] ?></p> </th>
                  <th> <input type="number" min="0" max="<?= $FirstValue['Stock'] ?>" id="Quantite_<?= $FirstKey ?>" class="form-control d-flex justify-content-center my-3" name="<?= $FirstKey ?>" value="<?= $FirstValue['Quantite'] ?>" > </th>
                  <th> <p class="d-flex justify-content-center my-3"><?= $FirstValue['PrixUnitaireHT'] ?> €</p> </th>
                  <th> <a href="../Commun/php/delProduitPanier.php?id=<?= $FirstKey ?>" class="d-flex justify-content-center my-3">
                    <img src="../Icones/icons8-supprimer-pour-toujours-64.png" class="icone" ></a> </th>
                </tr>
            <?php endforeach;?>
        </tbody>
      </table>
      <input class="form-control" type="submit" name="Valider" value="Valider">
    <?php }else {
      echo "Il n'y a pas de produit dans votre panier.";
    } ?>
      </form>
    </div>
    <!-- row -->

  </div>
  <!-- container -->

<!-- Footer -->
<footer class="py-5 bg-dark fixed-bottom">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; 2TAK Hardware 2020</p>
    </div>
    <!-- /.container -->
</footer>

</body>
<?php require('../Commun/php/require_script.php'); ?>
</html>
