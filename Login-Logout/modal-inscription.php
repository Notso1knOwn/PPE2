<div class="modal fade" id="modal_inscription" tabindex="-1" role="dialog" aria-labelledby="modal_inscription_Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <form action="../Commun/php/Traitement-Login-Register.php" class="form-Connexion" method="post">
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

			<input type="submit" id="submitInscription" class="btnConnexion" name="Membre[submit]" value="Inscription">
			<div class="NewAccount">
      <?php if(isset($_SESSION['message'] )) { echo $_SESSION['message'] ; } ?></br></br>
      <button type="button" class="btn btn-secondary" id="Annuler" data-dismiss="modal">Annuler</button>
			</div>
    </form>

    </div>
  </div>
</div>
