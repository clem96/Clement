<?php
//boucle de creation du tableau
$lg = 0;
$somme = 0;
do{
    //verifie la saisie pour un entier
        do{
          do{
          $num = readline("Entrer une note : ");
      }while( ! is_numeric($num));  
 }while(! is_int($num * 1));

 if($num != 0){
     $tab[] = $num;
     $somme += $num; 
     $lg++;  
 } 

}while($num != 0);
  
$moyenne = $somme / $lg;
//parcour le tableau pour trouver les notes sup à moyenne
echo "La moyenne est : $moyenne , notes superieur à la moyenne :\n";

foreach ($tab as $element){

    if($element > $moyenne){
      echo"$element \n"; 
    }
}
