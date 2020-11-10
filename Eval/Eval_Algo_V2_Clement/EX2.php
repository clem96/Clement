<?php

$i = 0;
//interoge l'utilisateur pour les valeurs
$bornInf = readline('Entrer la borne inférieur : ');
$bornSup = readline('Entrer la borne supérieur : ');

//transforme un string en un int.
$inf = $bornInf / 1;
$sup = $bornSup / 1;

for($i= $inf; $i < $sup; $i++){
    //si divisible par 1 et par lui meme.
    if( is_integer($i / 1) && is_integer($i / $i)){
        echo($i ." est premier. \n");
    }
}


