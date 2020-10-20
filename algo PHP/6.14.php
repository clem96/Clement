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

  //Calcule de la moyenne
 function calcMoyenne($tableau , $lg){
     foreach ($tableau as $element) {
       
        $somme = $element++;
     }
    return  $somme / $lg;
 }


//boucle de creation du tableau
$lg = 1;
do{
 $num = nombreEntier("Entrer une note ou '0' pour terminer");

 if($num != 0){
     $tab[]=$num;
     $lg++;
 } 

}while($num != 0);

$moyenne = calcMoyenne($tab, $lg);
echo "La moyenne est : $moyenne , notes superieur à la moyenne \n";

//parcour le tableau pour trouver les notes sup à moyenne
foreach ($tab as $element) {

    if($element > $moyenne){
      echo"$element \n"; 
    }
}
