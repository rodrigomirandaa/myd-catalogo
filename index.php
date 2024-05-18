<?php include('conectdb.php'); 
    $clinicas = $database -> getReference('dbClinicas/Clinicas/') -> getSnapshot();
?>

<?php include('components/head.php'); ?>
<?php include('components/navbar.php'); ?>
<?php include('components/banner.php'); ?>

<?php foreach ($clinicas -> getValue() as $clinica):?>
    <?php include('components/cards.php')?>
<?php endforeach?>

<?php include ('components/footer.php'); ?>




