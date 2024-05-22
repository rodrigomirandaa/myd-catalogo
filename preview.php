<?php
include ('./conectdb.php');
$id = $_GET['chave'];

$info = $database -> getReference('dbClinicas/Clinicas/'.$id) -> getSnapshot();
$data = $info -> getValue();
?>
<?php include ('components/head.php'); ?>
<?php include ('components/navbar.php'); ?>
<?php include ('components/carrosel.php'); ?>
<?php include ('components/detalhes.php'); ?>
<?php include ('components/footer.php'); ?>