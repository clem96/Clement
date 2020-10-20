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
  
  $n = nombreEntier("Nombre de chevaux partant");
  $p = nombreEntier("Nombre de chevaux jouer");
  
  $nFac = factorielle($n);
  $npFac = factorielle($n-$p);

  $x = $nFac / $npFac;
  $y = $nFac / (factorielle($p) * $npFac);

  echo("Une chance sur  $x de gagner");
  echo("\n");
  echo("Une chance sur  $y de gagner");

  