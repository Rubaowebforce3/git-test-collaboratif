<?php
require_once ('./manager.php');
require_once ('./secretaire.php');

$al = new Manager('Capone', 'Al', 32);
$sylvie = new Secretaire('Durand', 'Sylvie', 25);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Test colaboratif</title>

    <?php 
        $al->direBonjour();
        echo "<br><br>";
        $sylvie->direBonjour();
        echo "<br><br>";
        $sylvie->prendRDV($al, "Eliott Ness à 3 heures du mat. sur les docks...");
        $al->afficherRDV();
    ?>
</head>
<body>
