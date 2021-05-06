<?php
/**
 *
 */
class Filtrage
{
  private $_bdd;

  //Constructeur
  function __construct()
  {
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

  //méthodes
  public function Filtrage($pTampon , $pTable)
  {
    $query = (empty($pTampon) or $pTampon == " WHERE ") ? ("SELECT id, Marque, Modele, PrixUnitaireHT, Quantite  FROM ".$pTable) : ("SELECT Marque, Modele, PrixUnitaireHT FROM ".$pTable." AND "."(".$pTampon.")");
    $req = $this->_bdd->query($query);
    $card = $req->fetchAll(PDO::FETCH_ASSOC);
    return $card;
  }

  public function GetAvis($pIdProduit){
    try {
      settype($pIdProduit, 'int');
      $reqAvis = "SELECT note";
      $reqAvis .= " FROM avis_produit";
      $reqAvis .= " WHERE idProduit = :id";
      $query = $this->_bdd->prepare($reqAvis);
      $query->execute([':id' => $pIdProduit]);
      $result = $query->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    } catch (\Exception $e) {
      $result = "Aucun";
      return $result;
    }
  }
}
 ?>
