<?php
require_once 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    require_once "class/Crud.php";
    $tp1 = new Crud(Config::class);
    $maison = $tp1->selectIdMaison('maison_edition', $id);
    extract($maison);
}else{
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">

    <title>Document</title>
</head>
<body>
    <?= include "assets/menu.php"; ?>
    <main>

    <div class="info">
        <h3><?php echo $nom_maison_edition; ?></h3>
        <p><strong>Téléphone :</strong><?php echo $telephone; ?></p>
        <p><strong>Courriel :</strong><?php echo $courriel; ?></p>
    </div>
    </main>
</body>
</html>