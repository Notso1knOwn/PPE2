<?php
/**
 *
 */
class BDDcon
{
  protected $_bdd;

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
}

 ?>
