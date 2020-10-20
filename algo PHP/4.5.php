<?php
do{
 $age = readline('Indiquez votre age :');
 $sexe = readline('Etes vous un homme ou une femme (H ou F)');
 $sexe = strtoupper($sexe);   
}while($sexe != "H" or "F" && ctype_digit($age));


if($sexe == "H" && $age >= 20 ){
      echo"Vous êtes impossable";  
}else if($sexe == "F" && $age >= 18 && $age <= 35){
    echo"Vous êtes impossable";
}else{
     echo "vous n'êtes pas imposable";
    }


// test  
// 17 F = non   18 F = oui  35 F = oui  36 F = non
// 19 H = non   20 H = oui 