<?php
require("fonction.php");

$num = nombreEntier("Entrer un nombre de saisie : ");
$do = nombreEntier("Entrer une valeur : ");

for ($e=0; $e < $num; $e++) { 
     $tab[] = $do; 
}
  

$i = 0;
$flag = true;
do{
if($tab[$i] < $tab[$i+1]){
    //croissant
  if($tab[$i] +1 == $tab[$i+1]){
      $i++;
  }else{
    $flag = false; 
  }
}else{
    //decroisant
    if($tab[$i] - 1 == $tab[$i-1]){
     $i++;
    }else{
      $flag = false; 
    }

}    
}while($flag);

if($i == count($tab) -1){
    echo("Le tableau est consecutif");
}else{
    echo("Le tableau n'est pas consecutif");
}