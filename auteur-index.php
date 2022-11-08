<?php
require_once 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    require_once "class/Crud.php";
    $tp1 = new Crud(Config::class);
    $auteur = $tp1->selectIdauteur('auteur', $id);
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

<?= include "assets/menu.php"; ?>
<body>
    <main>
        <section class="liste">
            <h3>Liste d'auteurs</h3>
            <table>
                <tbody>
                    <?php
                        foreach($auteur as $row){
                    ?>
                        <tr>
                            <td><a href="auteur-show.php?id=<?php echo $row['idAuteur'] ?>"></a>
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