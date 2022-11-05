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
            <h2>Entrez les informations sur l'auteur</h2>
            <form action="auteur-store.php" method="post">
                <label>Nom de l'auteur
                    <input type="text" name="nom_auteur">
                </label>           
                <input type="submit" value="Confirmer">
            </form>
        </div>

    </main>
</body>
</html>