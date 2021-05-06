<?php
session_start();
require('../Commun/Class/Membre.class.php');


// On fait les trois test si les post sont défini et non NULL, si les post ne sont pas "vides" et enfin si les chanps mdp sont égaux
if(isset($_POST["Membre"])){
    if(!empty($_POST["Membre"])){
      if($_POST["Membre"]['Mot_de_passe'] == $_POST["Membre"]['Confirm_mdp']){
        unset($_POST["Membre"]['Confirm_mdp']);

        // Pour nous simplifié on met les post dans des variables
        $Identifiant = $_POST["Membre"]['Identifiant'];
        $mdp = $_POST["Membre"]['Mot_de_passe'];
        $email = $_POST["Membre"]['Email'];

        $UnMembre = new Membre;
        try {
          $UnMembre -> AjouterProfil($Identifiant , $email , $mdp);
          $UnMembre -> Setteur($_POST['Membre']);
          $_SESSION['Identifiant'] = $Identifiant;
          $message = 'Connexion Effectuée';
        } catch (\Exception $e) {
          $message = 'Identifiant ou mot de passe incorrect';
        }

      //Redirection vers la page d'accueil
      header('Location: index.php');
      }
      else {
        //message si les mdp sont différents dans le but que l'utilisateur ai un retour
        $reponse = 'Le Mot de passe est différent sur les deux champs';
      }
    }
    else {
      //message si tous les champs ne sont pas remplis
      $reponse = 'Veuillez remplir tous les champs';
   }
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="login.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
		<title>Inscription</title>
	</head>

  <body>
      <form action="Inscription.php" class="form-Connexion" method="post">
      <h1>Inscription</h1>

			<div class ="Id-mdp">
				<input type="text" name="Membre[Identifiant]">
				<span data-placeholder="Identifiant"></span>
			</div>
			<div class ="Id-mdp">
				<input type="email" name="Membre[Email]">
				<span data-placeholder="Email"></span>
			</div>
      <div class ="Id-mdp">
				<input type="password" name="Membre[Mot_de_passe]">
				<span data-placeholder="Mot de passe"></span>
			</div>
      <div class ="Id-mdp">
				<input type="password" name="Membre[Confirm_mdp]">
				<span data-placeholder="Confirmation du mot de passe"></span>
			</div>

			<input type="submit" class="btnConnexion" value="Inscription">
			<div class="NewAccount">
                            <?php if(isset($reponse)) { echo $reponse; } ?></br></br>
                            <a href="../index.php">Annuler</a>
			</div>
    </form>

		<script src="../Commun/js/imput-focus.js"></script>
  </body>
</html>
