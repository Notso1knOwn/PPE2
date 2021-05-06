<?php
require('../Commun/Class/Filtrage.class.php');
$UnFiltrage = new Filtrage;


$tampon = ($Famille == "Tour" OR $Famille == "Laptop") ? ("") : (" WHERE ");
$table = ($Famille == "Tour" OR $Famille == "Laptop") ? ("produit WHERE Famille = "."'".$Famille."'") : ($Famille/*." WHERE "*/);
$_SESSION['Table'] = $table;

if(isset($_POST)){
  foreach ($_POST as $cle => $value) {
    if(isset($value) AND !empty($value) AND $cle != "btnSubmit" AND $cle != "Ajouter_Panier" AND $cle != "Membre"){
      foreach ($value as $key) {
        $tampon = (empty($tampon) or $tampon == " WHERE ") ? ($tampon.$cle." LIKE '%".$key."%'") : ($tampon = $tampon." OR ".$cle." LIKE '%".$key."%'");
      }
    }
  }
}


// $query = (empty($tampon)) ? ("SELECT Marque, Modele, PrixUnitaireHT  FROM ".$table) : ("SELECT Marque, Modele, PrixUnitaireHT FROM ".$table." AND "."(".$tampon.")");
// $req = $bdd->query($query);
// $card = $req->fetchAll(PDO::FETCH_ASSOC);
$card = $UnFiltrage -> Filtrage($tampon , $table);
  unset($query);
  unset($tampon);
  unset($_POST);

 ?>
