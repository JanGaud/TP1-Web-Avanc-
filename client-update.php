<?php
//print_r($_POST);
require_once 'class/Crud.php';
require_once 'config.php';

$tp1 = new Crud(Config::class);
$update = $tp1->update('client', $_POST);

echo $update;





