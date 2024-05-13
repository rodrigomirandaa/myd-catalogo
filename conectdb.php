<?php

require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;

//estabelece conexão c firebase
$factory = (new Factory())->withDatabaseUri('https://projeto-php-da0f1-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();

?>
