<?php
function returnSum($numberOne = 1, $numberTwo = 2, $numberThree = 3) {
    return $numberOne + $numberTwo + $numberThree;
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 8</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 8</h1>
            <p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.<br />Tous les paramètres doivent avoir une valeur par défaut.</p>
        </div>
        <div>
            <p><?= returnSum(); ?></p>
        </div>
    </body>
</html>