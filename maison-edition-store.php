<?php
// print_r($_POST);
require_once 'class/Crud.php';

$tp1 = new Crud;

$insertMaison = $tp1->insertMaison('maison_edition', $_POST);

$insertMaison;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Enregistrer</title>
</head>
<body>
    <?= include "assets/menu.php"; ?>

        <section class="enregistrer">
            <h3>Vos données ont été enregistrées avec succès!</h3>
            <div class="logoContainer">
                <img src="assets\BiblioLogo.png" alt="LogoBiblio">
            </div>
        </section>
</body>
</html>


