<div class="modal fade" id="modal_connexion" tabindex="-1" role="dialog" aria-labelledby="modal_connexion_Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="modal_connexion_Label">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
      <form action="../Commun/php/Traitement-Login-Register.php" class="form-Connexion" method='post'>
        <h1>Connexion</h1>

  			<div class ="Id-mdp">
  				<input type="text" name="Membre[Identifiant]">
  				<span data-placeholder="Identifiant"></span>
  			</div>
  			<div class ="Id-mdp">
  				<input type="password" name="Membre[Mot_de_passe]">
  				<span data-placeholder="Mot de passe"></span>
  			</div>

  			<center><?php if(isset($_SESSION['message'] )) { echo $_SESSION['message'] ; } ?></center>
  			<input type="submit" id="submitConnexion" class="btnConnexion" name="Membre[submit]" value="Connexion">
  			<div class="NewAccount">
  				<button type="button" class="btn btn-primary Create" data-toggle="modal" data-target="#modal_inscription">Créer un compte</button></br></br>
          <button type="button" class="btn btn-secondary" id="Annuler" data-dismiss="modal">Annuler</button>
  			</div>
      </form>
    </div>
  </div>
</div>
