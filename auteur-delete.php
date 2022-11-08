<?php
//print_r($_POST);
require_once 'class/Crud.php';
require_once 'config.php';

$tp1 = new Crud;
$delete = $tp1->deleteAuteur('auteur', $_POST['id']);