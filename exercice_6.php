<?php
function returnString($lastName, $firstName, $age) {
    return 'Bonjour ' . $lastName . ' ' . $firstName . ', tu as ' . $age . ' ans.';
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 6</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 6</h1>
            <p>Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :<br />"Bonjour" + nom + prénom + ",tu as" + age + "ans".</p>
        </div>
        <div>
            <p><?= returnString('Côté', 'Fabien', 29); ?></p>
        </div>
    </body>
</html>