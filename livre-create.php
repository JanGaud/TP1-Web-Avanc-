<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Créer un compte</title>
    <?php
        include_once "class/Crud.php";
        include_once "config.php";
    ?>

</head>
<body>
    <?= include "assets/menu.php"; ?>
    <main>
    <div class="form">
        <h2>Entrez le titre et l'édition du livre</h2>
        <form action="livre-store.php" method="post">
            <label>Nom 
                <input type="text" name="titre">
            </label>           
             <label>Édition
                <input type="number" min="0" max="" name="edition">
            </label>
            <input type="submit" value="Confirmer">
        </form>
    </div>
    </main>
</body>
</html>