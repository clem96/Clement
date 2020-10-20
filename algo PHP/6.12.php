<?PHP
function nombreEntier($text){

do{
      do{
      $num = readline(" $text : ");
  }while( ! is_numeric($num));  
}while(! is_int($num * 1));
return $num;
}

do{
  $num = nombreEntier("Entrer une valeur ou 0 pour arreter");
  if($num != 0){
    $tab[]=$num+1;  
  } 
}while($num != 0);

foreach ($tab as $element) {
    echo "$element \n";
}