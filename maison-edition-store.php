<?php
// print_r($_POST);
require_once 'class/Crud.php';
require_once 'config.php';

$tp1 = new Crud(Config::class);

$insertMaison = $tp1->insertMaison('maison_edition', $_POST);

$insertMaison;



