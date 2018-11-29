<?php
function returnResult($age, $gender) {
    if ($gender == 'Femme') {
        $text = 'e';
    }
    if ($age >= 18 && ($gender == 'Homme' || $gender == 'Femme')) {
        return 'Vous êtes un' . $text . ' ' . strtolower($gender) . ' et vous êtes majeur' . $text;
    } else {
        return 'Vous êtes un' . $text . ' ' . strtolower($gender) . ' et vous êtes mineur' . $text;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 7</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 7</h1>
            <p>Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :<br />Homme<br />Femme</p>
            <p>La fonction doit renvoyer en fonction des paramètres :<br />Vous êtes un homme et vous êtes majeur<br />Vous êtes un homme et vous êtes mineur<br />Vous êtes une femme et vous êtes majeur<br />Vous êtes une femme et vous êtes mineur</p>
            <p>Gérer tous les cas.</p>
        </div>
        <div>
            <p><?= returnResult(25, 'Femme'); ?></p>
        </div>
    </body>
</html>