<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    require_once "class/Crud.php";
    $tp1 = new Crud;
    $maison = $tp1->selectIdMaison('maison_edition', $id);
    extract($amaison);
}else{
    header('Location: maison-edition-index.php');
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
            <form action="auteur-update.php" method="post">
                <input type="hidden" name="idMaison_edition" value="<?php echo $idMaison_edition;?>">
                <label>Nom 
                    <input type="text" name="nom_auteur" value="<?php echo $nom_maison_edition;?>">
                </label>
        
            <form action="auteur-delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $idMaison_edition;?>">
                <input type="submit" value="Effacer">
            </form>
        </div>

    </main>
    
</body>
</html>