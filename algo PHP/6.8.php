<?php
//meme que 6.8sans mais avec les fonction.
//boucle de creation du tableau

//vérifie la saisie 
//$text à afficher
function nombreEntier($text){

    do{
          do{
          $num = readline(" $text : ");
      }while( ! is_numeric($num));  
    }while(! is_int($num * 1));
  return $num;
  }


do{
 $num = nombreEntier("Entrer une valeur ou 0 pour arreter: ");
 //eviter se stoker le 0 d'arret
 if($num != 0){
     $tab[]=$num; 
 } 

}while($num != 0);
  

//parcour le tableau pour trouver les valeur positive et negative
foreach ($tab as $element) {

    if($element > 0){
      echo"$element est positif \n"; 
    }else{
      echo"$element est négatif \n"; 
    }
}
