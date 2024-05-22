<?php include('conectdb.php'); 
    $clinicas = $database->getReference('dbClinicas/Clinicas/')->getSnapshot();
?>
<div class="container py-4">
    <div class="row justify-content-center">
        <?php foreach ($clinicas->getValue() as $clinica): ?>
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <?php 
                include('components/cards.php'); 
                ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>
