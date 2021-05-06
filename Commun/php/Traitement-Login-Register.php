<?php
session_start();
require('../Class/Membre.class.php');

if (isset($_POST['Membre']) && !empty($_POST['Membre'])) {

  $Identifiant = $_POST["Membre"]['Identifiant'];
  $mdp = $_POST["Membre"]['Mot_de_passe'];
  $UnMembre = new Membre;


  if ($_POST['Membre']['submit'] == "Connexion") {

    $Con = $UnMembre->Connexion($Identifiant , $mdp);

    if (!empty($Con)){
      $UnMembre -> Setteur($_POST["Membre"]);
      $_SESSION['Identifiant'] = $Identifiant;
      unset($_POST);
      $_SESSION['message'] = 'Connexion Effectuée';

    }else {
      $_SESSION['message'] = 'Identifiant ou mot de passe incorrect';
    }

  }elseif ($_POST['Membre']['submit'] == "Inscription") {
    if($_POST["Membre"]['Mot_de_passe'] == $_POST["Membre"]['Confirm_mdp']){
      try {
        $email = $_POST["Membre"]['Email'];
        unset($_POST["Membre"]['Confirm_mdp']);
        $UnMembre -> AjouterProfil($Identifiant , $email , $mdp);
        $UnMembre -> Setteur($_POST['Membre']);
        $_SESSION['Identifiant'] = $Identifiant;
        unset($_POST);
        $_SESSION['message'] = 'Connexion Effectuée';
      } catch (\Exception $e) {
        $_SESSION['message'] = 'Identifiant ou mot de passe incorrect';
      }
    }else {
      //message si les mdp sont différents dans le but que l'utilisateur ai un retour
      $_SESSION['message'] = 'Le Mot de passe est différent sur les deux champs';
    }
  }
  //verif si inscription
}
// isset et empty $_POST['Membre']
else {
  $_SESSION['message'] = 'Veuillez remplir tous les champs';
}
header('Location: ../../index.php');
 ?>
