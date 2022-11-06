<?php
require_once 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    require_once "class/Crud.php";
    $tp1 = new Crud(Config::class);
    $client = $tp1->selectId('client', $id);
    extract($client);
}else{
    header('Location: client-index.php');
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
        <h3><?php echo $nom_client; ?></h3>
        <p><strong>Adresse :</strong><?php echo $telephone; ?></p>
        <p><strong>Postal Code :</strong><?php echo $adresse; ?></p>
        <p><strong>Anniversaire : </strong><?php echo $date_de_naissance; ?></p>
        <p><strong>Courriel : </strong><?php echo $client_courriel; ?></p>
        <p><a href="client-edit.php?id=<?php echo $id; ?>">Modifier</a></p>
    </div>
    </main>
</body>
</html>