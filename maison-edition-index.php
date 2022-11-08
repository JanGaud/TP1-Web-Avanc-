<?php
require_once "class/Crud.php";
require_once "config.php";

$tp1 = new Crud(Config::class);

$maison = $tp1->selectIdMaison("maison_edition", "idMaison_edition", "DESC");
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

<?= include "assets/menu.php"; ?>
<body>
    <main>
        <section class="liste">
            <h3>Liste de maisons d'edition</h3>
            <table>
                <thead>
                    <tr>
                        <th>Nom de la maison</th>
                        <th>Téléphone</th>
                        <th>Courriel</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($maison as $row){
                    ?>
                        <tr>
                            <td><a href="maison-edition-show.php?id=<?php echo $row['idMaison_edition'] ?>">
                                    <?php echo $row['titre'] ?>
                                </a>
                            </td>
                        </tr>
                    <?php       
                        }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>



