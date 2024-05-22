<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<?php
$caminhoimg1 = './static/' . $id . '/' . $id . '0.png';
$caminhoimg2 = "./static/" . $id . "/" . $id . "1.png";
$caminhoimg3 = "./static/" . $id . "/" . $id . "2.png";
$caminhoimg4 = "./static/" . $id . "/" . $id . "3.png";

?>

<div class="container">
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>


      <?php if(!empty($caminhoimg2) && file_exists($caminhoimg2)){?>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <?php } ?>

      <?php if(!empty($caminhoimg3) && file_exists($caminhoimg3)){?>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <?php } ?>

      <?php if(!empty($caminhoimg4) && file_exists($caminhoimg4)){?>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <?php } ?>

    </div>
    <div class="carousel-inner" style="height: 35em; box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);">

      <div class="carousel-item active" data-bs-interval="10000">
        <img src="<?php echo $caminhoimg1 ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>

      <?php if(!empty($caminhoimg2) && file_exists($caminhoimg2)){?>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="<?php echo $caminhoimg2 ?>" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
      <?php } ?>

      <?php if(!empty($caminhoimg3) && file_exists($caminhoimg3)){?>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="<?php echo $caminhoimg3 ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <?php } ?>

      <?php if(!empty($caminhoimg4) && file_exists($caminhoimg4)){?>
      <div class="carousel-item">
        <img src="<?php echo $caminhoimg4 ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <?php } ?>


    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>