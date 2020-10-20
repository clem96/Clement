<?PHP

do{
    do{
      do{
      $num = readline("Entrer une valeur ou 0 pour arreter: ");
  }while( ! is_numeric($num));  
}while(! is_int($num * 1));


  if($num != 0){
    $tab[]=$num+1;  
  } 
}while($num != 0);

foreach ($tab as $element) {
    echo "$element \n";
}