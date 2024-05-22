<?php
$imagem_files = glob("static/{$clinica['id']}/{$clinica['id']}_*.{jpg,jpeg,png}", GLOB_BRACE);
$imagem = $imagem_files ? $imagem_files[0] : 'static/default.png';
?>

<div class="card h-100">
    <img src='<?php echo $imagem; ?>' class='card-img-top' alt='Imagem da Clínica'>
    <div class="card-body">
        <h5 class="card-title">Nome da Clínica: <?php echo $clinica['nome']; ?> </h5>
        <p class="card-text">Telefone: <?php echo $clinica['telefone']; ?></p>
        <p class="card-text">Endereço: <?php echo $clinica['endereco']; ?> </p>
        <p class="card-text">Site: <a href="#">www.site-da-clinica1.com</a></p>
        <?php $link = 'preview.php?chave=' . $clinica['chave']; ?>
        <a href="<?php echo $link; ?>" class="botao">Ver Detalhes</a>
    </div>
</div>
