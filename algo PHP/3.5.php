<?php
$num1 = readline('Entrez un premier nombre : '); 
$num2 = readline('Entrez un autre nombre : '); 

if( $num1 < 0 Xor $num2 < 0)
{
   echo('produit est negatif'); 
}else if($num1 == 0 Xor $num2 == 0){
    echo'produit est nul';
}else if($num1 > 0 & $num2 > 0){ 
    echo'produit est positif';    
}