<?php
  $monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  switch ($monUrl) {
    case 'http://2TAK-Hardwre.fr/index.php' or 'http://2TAK-Hardwre.fr/index.php':
      $menu = 1;
      //Accueil
      break;

    case 'http://2TAK-Hardware.fr/Ordinateur/Tour.php' or 'http://2TAK-Hardwre.fr/Ordinateur/Laptop.php':
      $menu = 2;
      break;

      case 'http://2TAK-Hardware.fr/Composants/Processeur.php' or 'http://2TAK-Hardware.fr/Composants/Carte-Mère.php' or 'http://2TAK-Hardware.fr/Composants/RAM.php':
        $menu = 3
        break;

      case 'http://2TAK-Hardware.fr/Périphérique/Moniteur.php':
        $menu = 4;
        break;

    default:
      $menu = 1;
      //Par défault sur l'accueil
      break;
  }
 ?>

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
   <div class="container">
     <a class="navbar-brand" href="#">2TAK Hardware</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarResponsive">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item">
           <a class="nav-link" href="index.php"><span <?php if($menu == 1){echo"class='active'";} ?> > Accueil </span></a>
         </li>
         <li class="nav-item"><!--btn-group dropdown-->
           <a class="nav-link" href="Ordinateur.php"><span <?php if($menu == 2){echo"class='active'";} ?> >Ordinateurs</span></a>
             <!--<button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <span class="sr-only">Toggle Dropdown</span>
             </button>
             <div class="dropdown-menu">
               <a class="dropdown-item" href="Ordinateur/Laptop.php">Laptop</a>
               <a class="dropdown-item" href="Ordinateur/Tour.php">Tour</a>
             </div>-->
         </li>
         <li class="nav-item">
           <a class="nav-link" href="CréerConfig.php">CréerConfig</a>
         </li>

         <li class="nav-item ">
           <a class="nav-link" href="Composant.php"><span <?php if($menu == 3){echo"class='active'";} ?> >Composants</span></a>
         </li>

         <li class="nav-item ">
           <a class="nav-link" href="Périphérique.php"><span <?php if($menu == 4){echo"class='active'";} ?> >Périphériques</span></a>
         </li>
       </ul>
     </div>
   </div>
 </nav>
