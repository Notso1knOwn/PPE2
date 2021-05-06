<?php if (isset($card)) {
  foreach ($card as $key) {

    $allAvis = $UnFiltrage->GetAvis($key['id']);

    if (!empty($allAvis)) {
    $noteGlobale = 0;
      foreach ($allAvis as $keyAvis) {
        foreach ($keyAvis as $noteAvis) {
        $noteGlobale = $noteGlobale + $noteAvis;
        }
      }
      $nbNote = count($allAvis);
      $noteGlobale = $noteGlobale/$nbNote;
      $tailleNote = 20*$noteGlobale."px";

    }else {
      $noteGlobale = "Pas d'avis";
      $tailleNote = '100px; background-image: linear-gradient(120deg , rgba(0,0,0, 0.03) , rgba(0,0,0, 0.03))!important';
    }

    ?>
<div class="col-lg-4 col-md-6 mb-4">
  <div class="card h-100">
    <?php   $image = "../Images/".$PremFamille."/".$Famille."/".$key['Modele'].".jpg";  ?>
    <a href="#"><img class="card-img-top image" src='<?= $image; ?>' alt=""></a>
    <div class="card-body">
      <h4 class="card-title text-center">
        <a href="#"><?php
        echo $key['Marque'];  echo " "; echo $key['Modele'];?></a>
      </h4>
    </div>
    <div class="card-footer">
      <p class="card-text"><?= $key['PrixUnitaireHT']."€"; ?></p>

      <!-- Début Ajout panier -->
      <?php if(isset($_SESSION['Identifiant'])){ ?>
        <a class="Panier" href="../Commun/php/addPanier.php?id=<?= $key['id'] ?>&PremFamille=<?= $PremFamille ?>&Famille=<?= $Famille ?>">
        <img src="../Icones/icons8-ajouter-au-panier-64.png" class="icone"></a>


    <?php } ?>
    <!-- Fin Ajout panier -->

    </div>
    <div class="card-footer">
      <!-- <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small> -->
      <div class="cadre">
        <div class="noteGraph" style="width: <?= $tailleNote ?>;"></div>
      </div>
      <div class="note float-right">
        <p> <?php if (is_float($noteGlobale) or is_int($noteGlobale)) { ?>
          <?php echo $noteGlobale." /5"; ?>
        <?php }else { echo $noteGlobale;} ?>
        </p>
      </div>
    </div>
  </div>
</div>
<?php }/*unset($card);*/} ?>
