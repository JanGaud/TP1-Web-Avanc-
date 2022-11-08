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
        $crud = new Crud(Config::class);
    ?>

</head>
<body>
    <?= include "assets/menu.php"; ?>
    <main>
    <div class="form">
        <h2>Entrez les informations du livre</h2>
        <form action="livre-store.php" method="post">
            <label>Nom 
                <input type="text" name="titre">
            </label>
            <label>Auteur
                <select name="Auteur_idAuteur" id="">
                    <?php
                        foreach($crud->getAuteurs() as $auteur){
                            echo "<option value =". $auteur['idAuteur'] ."> " . $auteur['nom_auteur'] . "</option>";
                        }
                    ?>
                </select>
            </label>         
            <label>Maison d'édition
                <select name="Maison_edition_idMaison_edition" id="">
                    <?php
                        foreach($crud->getMaisonsEdition() as $maisonEdition){
                            echo "<option value =". $maisonEdition['idMaison_edition'] ."> " . $maisonEdition['nom_maison_edition'] . "</option>";
                        }
                    ?>
                </select>
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