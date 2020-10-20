<?php
//verifie la saisie pour un entier
    do{
      do{
      $lg = readline("Entrer le nombre de saisie : ");
  }while( ! is_numeric($lg));  
}while(! is_int($lg * 1));

//boucle de creation du tableau
for ($i=0; $i < $lg; $i++) { 
    //verifie la saisie pour un entier
        do{
          do{
          $num = readline("Entrer une valeur : ");
      }while( ! is_numeric($num));  
 }while(! is_int($num * 1));
 $tab[]=$num;    
}
  

//parcour le tableau pour trouver la plus grande valeur
$max = 0;
foreach ($tab as $element) {

    if($element > $max){
        $max = $element;
    }
}
echo "Valeur maxi : $max";