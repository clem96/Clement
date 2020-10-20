<?php
$b10 = 0;
$b5 = 0;
$rest = 0;
$total = 0;
//controle de saisie
function nombreEntier(){
    do{
          do{
          $num = readline('Entrez un entier : ');
      }while( ! is_numeric($num));  
    }while(! is_int($num * 1));
  return $num;
  }


do{
  $prix = nombreEntier();
 $total = $total + $prix;   
}while($prix > 0);
  


echo"\n";
echo"Prix à payer : $total €";
echo"\n";

$payer = readline("Monaie payer par le client : ");  
echo"\n";


  $rendre =  $payer - $total;   

if($payer > $rendre){

 do{
  $b10 = $rendre / 10;
  $rendre = $rendre - ($b10 * 10);
}while($rendre > 10);

 do{
   $b5 = $rendre  / 5; 
  $rendre = $rendre - ($b5 * 5);  
 }while($rendre > 5);
   
do{
   $p1 = $rendre;
   $rendre = $rendre - $p1;     
}while($rendre > 0);

 echo"Rendre $b10 billiet de 10€, $b5 billiet de 5€, et $rest piéce de 1€";
 
}else{
    $rest = $total - $payer;
    echo"Il reste $rest € à réglé";
}




