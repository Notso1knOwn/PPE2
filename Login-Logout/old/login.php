<?php
session_start();
require('../Commun/Class/Membre.class.php');


if(isset($_POST["Membre"])){
    if(!empty($_POST["Membre"])){

          $Identifiant = $_POST["Membre"]['Identifiant'];
		      $mdp = $_POST["Membre"]['Mot_de_passe'];

          $UnMembre = new Membre;
            $Con = $UnMembre -> Connexion($Identifiant , $mdp);
            $UnMembre -> Setteur($_POST["Membre"]);

            if (!empty($Con)){
              $_SESSION['Identifiant'] = $Identifiant;
              header('Location: ../index.php');
              unset($_POST);
              $message = 'Connexion Effectuée';

            }else {
              $message = 'Identifiant ou mot de passe incorrect';
            }
    }
    else {
      //on affiche un message si tous les champs ne sont pas remplis
      $message = 'Veuillez remplir tous les champs';
   }
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="login.css" />
    <link rel="icon" href="../Icones/icons8-processeur-64.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
		<title>Login</title>
	</head>

  <body>
    <form action="login.php" class="form-Connexion" method='post'>
      <h1>Connexion</h1>

			<div class ="Id-mdp">
				<input type="text" name="Membre[Identifiant]">
				<span data-placeholder="Identifiant"></span>
			</div>
			<div class ="Id-mdp">
				<input type="password" name="Membre[Mot_de_passe]">
				<span data-placeholder="Mot de passe"></span>
			</div>

			<center><?php if(isset($message)) { echo $message; } ?></center>
			<input type="submit" class="btnConnexion" value="Connexion">
			<div class="NewAccount">
				<a href="/Login-Logout/Inscription.php" target="_blank">Créer un compte</a></br></br>
        <a href="../index.php">Annuler</a>
			</div>
    </form>

		<script src="../Commun/js/imput-focus.js"></script>
  </body>
</html>
