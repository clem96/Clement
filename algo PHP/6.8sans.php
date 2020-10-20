<?php

//boucle de creation du tableau
$lg = 1;
do{
    //verifie la saisie pour un entier
        do{
          do{
          $num = readline("Entrer une valeur ou 0 pour arreter: ");
      }while( ! is_numeric($num));  
 }while(! is_int($num * 1));
// evite de stoker le 0 d'arret
 if($num != 0){
     $tab[]=$num; 
 } 

}while($num != 0);
  

//parcour le tableau pour trouver les valeurs positive et négative
foreach ($tab as $element) {

    if($element > 0){
      echo"$element est positif \n"; 
    }else{
      echo"$element est négatif \n"; 
    }
}
