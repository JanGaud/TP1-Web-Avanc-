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
    <main>
        <h2>Entrez le titre et l'édition du livre</h2>
        <form action="maison-edition-store.php" method="post">
            <label>Nom de la maison d'édition
                <input type="text" name="nom_maison_edition">
            </label>
            <label>Adresse de la maison d'édition
                <input type="text" name="adresse">
            </label>
            <label>Téléphone
                <input type="text" name="maison_edition_telephone">
            </label>          
             <label>Adresse courriel
                <input type="email" name="maison_edition_courriel">
            </label>
            <input type="submit" value="Confirmer">
        </form>

    </main>
</body>
</html>