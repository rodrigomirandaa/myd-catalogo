<?php
    include('./conectdb.php');
    $id = $_GET['chave'];

    $info = $database->getReference('dbClinicas/Clinica/'.$id)->getValue();
?>
<?php include('components/head.php'); ?>
<?php include('components/navbar.php'); ?>
<?php include ('components/carrosel.php');
 recebeId($id); ?>
 <?php include ('components/detalhes.php');
 recebeInfo($info); ?>