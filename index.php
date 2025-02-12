<?php
// Fichier contenant le compteur
$file = './counter.txt';

// Lire le nombre actuel de visiteurs
$count = file_exists($file) ? (int)file_get_contents($file) : 0;

// Incrémenter le compteur
$count++;

// Sauvegarder le nouveau compteur dans le fichier
file_put_contents($file, $count);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
    <title>Compteur de visiteurs</title>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded shadow-md text-center">
            <h1 class="text-3xl font-bold mb-4">Bienvenue!</h1>
            <p class="text-xl">Vous êtes le visiteur numéro :</p>
            <p class="text-4xl font-extrabold text-blue-500 mt-2"><?php echo $count; ?></p>
        </div>
    </div>
</body>
</html>
