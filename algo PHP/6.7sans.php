<?php

 for ($i=0; $i < 9; $i++) { 
       do{
          do{
          $num = readline("Etrez une note : ");
      }while( ! is_numeric($num));  
    }while(! is_int($num * 1));

 $tab[$i] = $num;  
 $somme = ++$num; 
 }

$moyenne = $somme / $i;
echo('Calcul ' .$somme ." / " .$i ."\n");
echo("Voici la moyenne : $moyenne");

