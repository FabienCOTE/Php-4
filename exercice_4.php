<?php
function returnInt($myIntOne, $myIntTwo) {
    if ($myIntOne > $myIntTwo) {
        return 'Le premier nombre est plus grand';
    }
    if ($myIntOne < $myIntTwo) {
        return 'Le premier nombre est plus petit';
    }
    if ($myIntOne == $myIntTwo) {
        return 'Les deux nombres sont identiques';
    }
}
?>
<!DOCTYPE html>
<html  lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 4</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 4</h1>
            <p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :<br />Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième<br />Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième<br />Les deux nombres sont identiques si les deux nombres sont égaux</p>
        </div>
        <div>
            <p><?= returnInt(50, 50); ?></p>
        </div>
    </body>
</html>