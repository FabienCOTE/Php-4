<?php
function returnString($myString) {
    return $myString;
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 2</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 2</h1>
            <p>Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.</p>
        </div>
        <div>
            <p><?= returnString('Hello World !'); ?>
            </p>
        </div>
    </body>
</html>