<?php
echo('Racine de l\'equation du 2nd degré' ."\n");
echo('Y= aX² + bX +c' ."\n");

// verifie la saisie pour nombre
function nombre($text){
    do{
        $num = readline(" $text");
    }while( ! is_numeric($num));  
    
  return $num;
  }

$ask = "o";

do{
$nombreA = nombre('Quelle est la valeur de a :' ."\n");
$nombreB = nombre('Quelle est la valeur de b :' ."\n");
$nombreC = nombre('Quelle est la valeur de c :' ."\n");

$delta = ($nombreB * $nombreB) - (4 * $nombreA * $nombreC);

//Recherche dans quel cas est delta
if($delta == 0){

  echo("L'équation possède une racines double \n");
  echo("d = $delta \n");
  echo("x1 = x2 = ".-($nombreB/(2*$nombreA)) ."\n");

}elseif($delta > 0){

    echo("L'équation possède 2 racines distinctes \n");
    echo("d = $delta \n");
    echo("L'equation s\'annule pour : \n");
    echo("x1 = ".(-$nombreB + sqrt($delta))/(2*$nombreA)."\n");
    echo("x2 = ".(-$nombreB -sqrt($delta))/(2*$nombreA) ."\n");

}else if($delta < 0){

    echo("L'équation ne possède pas de racines réelle \n");
    echo("d = $delta \n");

}else{

    echo("L'équation n\'en est plus une !!! \n");
}
$ask = readline("Voulez vous continuer ? \n");
}while($ask !='N');
echo('Au revoir et à bientôt');

