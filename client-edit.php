<?php
require_once 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    require_once "class/Crud.php";
    $tp1 = new Crud(Config::class);
    $client = $tp1->select('client', $id);
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
    <style>
        input{
            display: block;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?= include "assets/menu.php"; ?>
<main>
    <div class="form">
        <h2>Modifier</h2>
            <form action="client-update.php" method="post">
                <input type="hidden" name="idClient" value="<?php echo $idClient;?>">
                <label>Nom 
                    <input type="text" name="nom_client" value="<?php echo $nom_client;?>">
                </label>
                <label>Téléphone
                    <input type="text" name="telephone" value="<?php echo $telephone;?>">
                </label>
                <label>Adresse
                    <input type="text" name="adresse" value="<?php echo $adresse;?>">
                </label>
                <label>Anniversaire
                    <input type="date" name="date_de_naissance" value="<?php echo $date_de_naissance;?>">
                </label>
                <label>Courriel
                    <input type="email" name="client_courriel" value="<?php echo $client_courriel;?>">
                </label>
                <input type="submit" value="Modifier">
            </form>
        
            <form action="client-delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $idClient;?>">
                <input type="submit" value="Effacer">
            </form>
        </div>

    </main>
    
</body>
</html>