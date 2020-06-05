<?php
$age = 27;

$isEasy = true;
// ou if ($isEasy == true) { echo "C'est facile !"; }
//      elseif ($isEasy == false) { echo "C'est difficile !"; }

$age2 = 27;
$gender = "Femme";

$magnitude = 9;

$gender2 = "Femme";

$age3 = 18;

$isOk = false;

$isOk2 = true;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PHP</title>
</head>
<body>
    <h1>Exercices PHP</h1>

    <h2>PARTIE II - Les conditions</h2>

    <h3>Exercice 1</h3>
    <p><?php if ($age >= 18) { echo 'Vous êtes majeur !'; } 
    else { echo 'Vous êtes mineur !'; } ?></p>

    <h3>Exercice 2</h3>
    <p><?php if ($isEasy) { echo "C'est facile !"; }
    else { echo "C'est difficile !"; } ?></p>

    <h3>Exercice 3</h3>
    <p><?php 
    if ($age2 >= 18 AND $gender == "Homme") { echo 'Vous êtes un homme et vous êtes majeur.'; }
        elseif ($age2 >= 18 AND $gender == "Femme") { echo 'Vous êtes une femme et vous êtes majeure.'; }
        elseif ($age2 <= 18 AND $gender == "Homme") { echo 'Vous êtes un homme et vous êtes mineur.'; }
        else { echo 'Vous êtes une femme et vous êtes mineure.'; } 
    ?></p>

    <h3>Exercice 4</h3>
    <p><?php 
    switch ($magnitude) {
        case 1 : 
            echo "Micro-séisme impossible à ressentir.";
        break;
        case 2 :
            echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
        break;
        case 3 :
            echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
        break;
        case 4 :
            echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
        break;
        case 5 :
            echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
        break;
        case 6 :
            echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
        break;
        case 7 :
            echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
        break;
        case 8 :
            echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
        break;
        case 9 :
            echo "Séisme capable de tout détruire sur une très vaste zone.";
    }
    ?></p>

    <h3>Exercice 5</h3>
    <p><?php if ($gender2 == "Femme") { echo "C'est une développeuse !!!"; }
            else { echo "C'est un développeur !!!"; } ?></p>

    <h3>Exercice 6</h3>
    <p><?php if ($age3 >= 18) { echo "Tu es majeur."; }
            else { echo "Tu n'es pas majeur."; } ?></p>

    <h3>Exercice 7</h3>
    <p><?php if ($isOk == false) { echo "C'est pas bon !!!"; }
            else { echo "C'est ok !!!"; } ?></p>

    <h3>Exercice 8</h3>
    <p><?php if ($isOk == true) { echo "C'est pas bon !!!"; }
            else { echo "C'est ok !!!"; } ?></p>

</body>
</html>
