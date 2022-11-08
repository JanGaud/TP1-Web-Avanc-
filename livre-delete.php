<?php
//print_r($_POST);
require_once 'class/Crud.php';

$tp1 = new Crud;
$delete = $tp1->deleteLivre('livre', $_POST['id']);