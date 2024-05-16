<link rel="stylesheet" href="./styles/style.css">
<?php include('conectdb.php');?>
<?php
  function recebeClinica($clinica){
    $clinica;
  }
?>

<section class="py-4">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">
      <!-- Card 1 -->
      <div class="col">
        <div class="card h-100">
          <img src="static/banner.svg" class="card-img-top" alt="Imagem da Clínica 1">
          <div class="card-body">
            <h5 class="card-title">Nome da Clínica:<?php echo $clinica['nome'];?> </h5>
            <p class="card-text">Telefone: <?php echo $clinica['telefone'];?></p>
            <p class="card-text">Endereço: <?php echo $clinica['endereco'];?> </p>
            <p class="card-text">Site: <a href="#">www.site-da-clinica1.com</a></p>
            <?php $link = 'preview.php?id='.$clinica['chave'];?>
            <a href="<?php echo $link?>" class="botao">Ver Detalhes</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
