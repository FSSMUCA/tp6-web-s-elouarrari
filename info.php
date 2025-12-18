<?php

$nom_etablissement = "Université XYZ";
$module = "Développement Web Avancé";
$annee = 2025;

$nombre1 = 15;
$nombre2 = 7;


$addition = $nombre1 + $nombre2;
$multiplication = $nombre1 * $nombre2;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page PHP - TP6</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 2rem; background: #f0f2f5; }
        h1 { color: #007BFF; }
        .card { background: white; padding: 1rem; border-radius: 10px; margin-bottom: 1rem; box-shadow: 0px 2px 5px rgba(0,0,0,0.1);}
    </style>
</head>
<body>
    <h1>Informations TP6</h1>

    <div class="card">
        <p><strong>Nom de l'établissement :</strong> <?php echo $nom_etablissement; ?></p>
        <p><strong>Module :</strong> <?php echo $module; ?></p>
        <p><strong>Année :</strong> <?php echo $annee; ?></p>
    </div>

    <div class="card">
        <p><strong>Exemples de variables numériques :</strong></p>
        <p>Nombre 1 : <?php echo $nombre1; ?></p>
        <p>Nombre 2 : <?php echo $nombre2; ?></p>
        <p>Addition : <?php echo $addition; ?></p>
        <p>Multiplication : <?php echo $multiplication; ?></p>
    </div>
</body>
</html>
