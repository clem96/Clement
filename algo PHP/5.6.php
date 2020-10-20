<?php
$resulta = 1;

function nombreEntier(){
  do{
        do{
        $num = readline('Entrez un entier : ');
    }while( ! is_numeric($num));  
  }while(! is_int($num * 1));
return $num;
}


$nomb = nombreEntier();

for ($i = 1; $i <= $nomb; $i++) {
 $resulta = $resulta * $i;

}
 echo $resulta;

