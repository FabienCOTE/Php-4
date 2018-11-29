<?php
function returnString($myStringOne, $myStringTwo) {
    return $myStringOne . $myStringTwo;
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 3</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 3</h1>
            <p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines</p>
        </div>
        <div>
            <p><?= returnString('Hello', ' World'); ?></p>
        </div>
    </body>
</html>