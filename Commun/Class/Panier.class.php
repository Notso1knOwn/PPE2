<?php
/**
 *
 */
class Panier
{
  private $_bdd;


  function __construct()
  {
    if (!isset($_SESSION['panier'])){$_SESSION['panier'] = array();}
    try
    {
        // $this->_bdd = new PDO('mysql:host=localhost;port=3308;dbname=2tak hardware;charset=utf8', 'root', '');
        $this->_bdd = new PDO('mysql:host=10.0.10.137;port=3306;dbname=2tak hardware;charset=utf8', 'root', 'root');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
  }

  public function verifProduit($pProduit){
    $req = $this->_bdd->query('SELECT id, Modele, PrixUnitaireHT, Quantite  FROM '.$_SESSION['Table']." AND id = ".$pProduit);
    $produit = $req->fetchAll(PDO::FETCH_ASSOC);
    if ($produit[0]['id'] != $pProduit) {
      return false;
    }else {
      return $produit;
    }
  }

  public function add($pProduit, $PremFamille, $Famille){
    $id = $pProduit[0]['id'];
    $Quantite = $pProduit[0]['Quantite'];
    if (isset($_SESSION['panier'][$id]) && $Quantite > $_SESSION['panier'][$id]['Quantite']) {
      $_SESSION['panier'][$id]['Quantite']++;

    }elseif (!isset($_SESSION['panier'][$id]['Quantite'])) {
        $_SESSION['panier'][$id] = array();
        $_SESSION['panier'][$id]['Modele'] = $pProduit[0]['Modele'];
        $_SESSION['panier'][$id]['PrixUnitaireHT'] = $pProduit[0]['PrixUnitaireHT'];
        $_SESSION['panier'][$id]['Quantite'] = 1;
        $_SESSION['panier'][$id]['PremFamille'] = $PremFamille;
        $_SESSION['panier'][$id]['Famille'] = $Famille;
        settype($Quantite, 'int');
        $_SESSION['panier'][$id]['Stock'] = $Quantite;
    }
  }

  public function delProduit($pProduit){
    unset($_SESSION['panier'][$pProduit]);
  }

  public function del(){
    unset($_SESSION['panier']);
  }
}
 ?>
