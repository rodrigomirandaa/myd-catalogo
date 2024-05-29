<?php
$imagem_files = glob("static/{$clinica['chave']}/{$clinica['chave']}_*.{jpg,jpeg,png}", GLOB_BRACE);
$imagem = $imagem_files ? $imagem_files[0] : 'static/banner.svg';
?>
<style>
    .card-img-top {
    width: 100%;
    height: 100%; 
    object-fit: scale-down;
}
</style>
<div class="card h-100">
<img src="<?php echo $imagem; ?>"  class="card-img-top" alt='Imagem da Clínica'>
    <div class='card-body'>
        <h5 class='card-title'> <?php echo $clinica['nome']; ?></h5>
        <br>
        <p class="card-text">Telefone: <?php echo $clinica['telefone']; ?></p>
        <p class="card-text">Endereço: <?php echo $clinica['endereco']; ?></p>
        <?php $link = 'preview.php?chave=' . $clinica['chave']; ?>
        <a href="<?php echo $link; ?>" class="botao">Ver Detalhes</a>
    </div>
</div>