<?php
// verifie la saisie pour un entier
function nombreEntier($text){
    do{
          do{
          $num = readline(" $text : ");
      }while( ! is_numeric($num));  
    }while(! is_int($num * 1));
  return $num;
  }

  function factorielle($nomb){
      $resulta = 1;
    for ($i = 1; $i <= $nomb; $i++) {
        $resulta = $resulta * $i;
       }
  }

$tab = [12, 15, 16 ,20];
//fonction de calcule de moyenne
function moyenne($tab){
  $moyenne = array_sum($tab) / count($tab);
  return = $moyenne
}



echo $moyenne;