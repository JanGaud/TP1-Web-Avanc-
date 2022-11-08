<?php
require_once "class/Crud.php";
require_once "config.php";

$tp1 = new Crud(Config::class);

$livre = $tp1->select("livre", "idLivre", "DESC");
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
            <h3>Liste de client</h3>
            <table>
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Edition</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($livre as $row){
                    ?>
                        <tr>
                            <td><a href="livre-show.php?id=<?php echo $row['idLivre'] ?>">
                                    <?php echo $row['titre'] ?>
                                </a>
                            </td>
                            <td><?php echo $row['edition'] ?></td>
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



