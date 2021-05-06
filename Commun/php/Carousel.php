<div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <?php $image1 = "../Images/Carousel/".$PremFamille."/".$Famille."/image_carousel_1.jpg";
          $image2 = "../Images/Carousel/".$PremFamille."/".$Famille."/image_carousel_2.jpg";
          $image3 = "../Images/Carousel/".$PremFamille."/".$Famille."/image_carousel_3.jpg"; ?>
    <div class="carousel-item active">
      <img class="d-block img-fluid image_carousel" src=<?php echo $image1; ?> alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid image_carousel" src=<?php echo $image2; ?> alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid image_carousel" src=<?php echo $image3; ?> alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
