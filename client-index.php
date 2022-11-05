<?php
require_once "class/Crud.php";
require_once "config.php";

$tp1 = new Crud(Config::class);

$client = $tp1->select("client", "nom_client", "DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?= include "assets/menu.php"; ?>
<body>
    <main>
        <h1>Liste de client</h1>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>telephone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($client as $row){
                ?>
                    <tr>
                        <td><a href="client-show.php?id=<?php echo $row['idClient'] ?>">
                                <?php echo $row['nom_client'] ?>
                            </a>
                        </td>
                        <td><?php echo $row['adresse'] ?></td>
                        <td><?php echo $row['telephone'] ?></td>
                    </tr>
                <?php       
                    }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>