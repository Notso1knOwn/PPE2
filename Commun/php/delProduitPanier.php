<?php session_start();
require('../Class/Panier.class.php');
$Panier = new Panier;
$json = array('error' => true);

if (isset($_GET['id'])) {
  $verifProduit = $Panier->verifProduit($_GET['id']);
  if ($verifProduit != false) {
    $Panier->delProduit($_GET['id']);
    $json['error'] = false;
    $json['message'] = "Le produit selectionné à bien été supprimé du panier";
  }
}else {
  $json['message'] = "Aucun produit n'a été selectionné";
}
unset($verifProduit);
echo json_encode($json);

header('Location: ../../Utilisateur/Panier');
 ?>
