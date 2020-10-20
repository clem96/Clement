<?php
$score = [7, 19, 7, 18, 12, 16, 19, 2, 13, 8, 13, 5, 3, 14, 11, 15, 19, 20, 4, 15];

//Boucle d'affichage du tableau
//affiche un element a chaque passage
for ($i = 0; $i < count($score); $i++) {
    echo ($score[$i] . "\t");
}

//passe la ligne
echo("\n");

//Calculer la somme et la moyenne de tous les scores
$somme = array_sum($score);
$moyenne = $somme / count($score);

//affichage des resultats
echo ('Somme des scores : ' . $somme . "\n");
echo ('la moyenne est de : ' . $moyenne . "\n");

//score strictement au-dessus de 10
//boucle parcoure le tableau si > a 10 alor on affiche
foreach ($score as $ele) {
    if ($ele > 10) {
        echo ($ele . "\t");
    }
}
echo ('Voici les scores superieur à 10 : ' . "\n");

//passe la ligne
echo("\n");


//initialisation de la variable
$max = 0;

//plus grand score et position dans le tableau. 
for ($i = 0; $i < count($score); $i++) {
    if ($max < $score[$i]) {
        $max = $score[$i];
        $pos = $i;
    }
}
//permet d'indiquer la position relle dans le tableau
$pos++;

echo ('Le plus grand score est : ' .$max ." il a été realiser par la personne en position : " .$pos);

