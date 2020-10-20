<?php
$avion = ["BOING747", "AIRBUSA380", "LAERJETT45", "DC10", "CONCORDE", "ANTONOV32"];
$codeAVION = ["BO", "AB", "LJ", "DC", "CO", "AN"];
$VitesseCroisiere = ["800", "950", "700", "900", "1400", "560"];
$RayonAction = ["10000", "12000", "4500", "8000", "16000", "2500"];

  //Fonction de recherche de l'avion
  $act = "oo";
Function recherche($req){ 
for ($i=0; $i < 5; $i++) {
    $act = $codeAVION[$i]; 

    if($req == $act){
     $index = $i;
     return $index;     
    }
}
    echo("Cet avion n'existe pas \n");
}


$ask ="O";
do{
 $nom = readline("Etrer le code de l'avion :");
 $index = recherche($nom);

    //affichage
        $avion = $avion[$index];
        $vitesse = $VitesseCroisiere[$index];
        $rayon = $RayonAction[$index]; 
 
        echo($avion .$vitesse .$rayon);
 

$ask = readline("Voulez vous faire une autre recherche (O/N) ");
}while($ask != 'N');



