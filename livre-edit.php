<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    require_once "class/Crud.php";
    $tp1 = new Crud;
    $livre = $tp1->selectId('livre', $id);
    extract($livre);
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
            <form action="livre-update.php" method="post">
                <input type="hidden" name="idlivre" value="<?php echo $idLivre;?>">
                <label>Titre 
                    <input type="text" name="nom_livre" value="<?php echo $titre;?>">
                </label>
                <label>édition
                    <input type="text" name="edition" value="<?php echo $edition;?>">
                </label>
                <input type="submit" value="Modifier">
            </form>
        
            <form action="livre-delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $idlivre;?>">
                <input type="submit" value="Effacer">
            </form>
        </div>

    </main>
    
</body>
</html>