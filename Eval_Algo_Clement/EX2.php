<?php
// verifie la saisie pour un entier
function nombreEntier($text){
    do{
          do{
          $num = readline("$text");
      }while( ! is_numeric($num));  
    }while(! is_int($num * 1));
  return $num;
  }

  $multiple = nombreEntier("Entrer le nombre pour lequel vous voulez la table de multiplication : ");
  
  //Boucle de calcul des multiplications
  for ($i=1; $i < 11; $i++) { 
      $produit = $multiple * $i;
      echo($multiple ."\t X" .$i ."\t = " .$produit ."\n");
  }
 