<?php session_start();
require('../Class/Panier.class.php');
$Panier = new Panier;
$json = array('error' => true);

if (isset($_GET['id'])) {
  $verifProduit = $Panier->verifProduit($_GET['id']);
  if ($verifProduit != false) {
    $Panier->add($verifProduit, $_GET['PremFamille'], $_GET['Famille']);
    $json['error'] = false;
    $json['message'] = "Le produit selectionné à bien été ajouté au panier";
  }
}else {
  $json['message'] = "Aucun produit n'a été selectionné";
}

unset($_GET);
echo json_encode($json);
 ?>
