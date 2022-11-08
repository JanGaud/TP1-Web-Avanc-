<?php
require_once "class/Crud.php";

$tp1 = new Crud;

$auteur = $tp1->select("auteur", "nom_auteur", "DESC");
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
            <h3>Liste des auteurs</h3>
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($auteur as $row){
                    ?>
                        <tr>
                            <td><a href="auteur-show.php?id=<?php echo $row['idAuteur'] ?>">
                                    <?php echo $row['nom_auteur'] ?>
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