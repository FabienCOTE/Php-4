<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 5</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 5</h1>
            <p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.</p>
        </div>
        <div>
            <p>
                <?php
                function returnConcatenation($myInt, $myString) {
                    return $myInt . $myString;
                }
                echo returnConcatenation(29, ' ans');
                ?>
            </p>
        </div>
    </body>
</html>