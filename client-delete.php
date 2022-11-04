<?php
//print_r($_POST);
require_once 'class/Crud.php';
require_once 'config.php';

$tp1 = new Crud(Config::class);
$delete = $tp1->delete('client', $_POST['id']);
 
