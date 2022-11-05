<?php
// print_r($_POST);
require_once 'class/Crud.php';
require_once 'config.php';

$tp1 = new Crud(Config::class);

$insert = $tp1->insert('client', $_POST);

$insert;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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