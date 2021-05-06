<?php
/**
 *
 */
class Membre
{
  private $_Id;
  private $_Identifiant;
  private $_Email;
  private $_Mdp;
  private $_Rang;
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

  //Accesseurs
  public function GetIdentifiant($pString)
  {
    $return = "_".$pString;
    return $this->$return;
  }


  //setteurs
  public function SetNom(string $pIdentifiant){
    $this->_Identifiant = $pIdentifiant;
  }
  public function SetMdp(string $pMdp){
    $this->_mdp = $pMdp;
  }


  public function Setteur($pArray){
    $pQuery = "";
    foreach ($pArray as $key => $value) {
      if($key != "submit"){
      $pQuery = (empty($pQuery)) ? ($pQuery.$key." = "."'".$value."' ") : ($pQuery." AND ".$key." = "."'".$value."' ");
    }
    }
    $query = "SELECT * FROM membre WHERE ".$pQuery;
    $pReq = $this->_bdd->query($query);
    $req = $pReq->fetchAll(PDO::FETCH_ASSOC);

    $attribut = array('Id' , 'Identifiant' , 'Email' , 'Mot_de_passe' , 'Rang');
    foreach ($req as $value) {
      for ($i=0; $i < count($value) ; $i++) {
        $varClass = "_".$attribut[$i];
        $this->$varClass = $value[$attribut[$i]];
      }
    }
  }




  //méthodes
  public function Connexion($Identifiant, $mdp)
  {
    $query = $this->_bdd->prepare('SELECT Identifiant, Mot_de_passe FROM membre WHERE Identifiant = :Id AND Mot_de_passe = :mdp');
    $query->execute(array('Id'=>$Identifiant, 'mdp'=>$mdp));
    $rep = $query->fetchAll(PDO::FETCH_ASSOC);
    return $rep;
  }

  public function AjouterProfil($Identifiant , $email, $mdp)
  {
    $query = $this->_bdd->prepare('INSERT INTO membre(Identifiant, Email, Mot_de_passe) VALUES(:Id, :Email, :mdp)');
    $query->execute(array('Id'=>$Identifiant, 'Email'=>$email, 'mdp'=>$mdp));
    $reponse = 'Inscription terminé';
    return $reponse;
  }

  public function ModifierProfil($Identifiant , $email, $mdp, $Id)
  {
    $query = $this->_bdd->prepare('UPDATE membre SET Identifiant = :Identifiant_Modifier , Email = :Email, Mot_de_passe = :mdp_Modifier WHERE Id = :Id');
    $query->execute(array('Identifiant_Modifier'=> $Identifiant, 'Email' => $Email , 'mdp_Modifier'=>$mdp , 'Id' => $Id));
    $reponse = 'Modification effectuée';
    return $reponse;
  }
}

 ?>
