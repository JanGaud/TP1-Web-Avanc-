<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    require_once "class/Crud.php";
    $tp1 = new Crud;
    $auteur = $tp1->selectIdAuteur('auteur', $id);
    extract($auteur);
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
        <h3><?php echo $nom_auteur; ?></h3>
        <p><a href="auteur-edit.php?id=<?php echo $id; ?>">Modifier</a></p>
    </div>
    </main>
</body>
</html>