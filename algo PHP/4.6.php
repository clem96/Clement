<?php
do
{
$c1 = readline('Indiquez le score du candidat n1 : ');
$c2 = readline('Indiquez le score du candidat n2 : ');
$c3 = readline('Indiquez le score du candidat n3 : ');
$c4 = readline('Indiquez le score du candidat n4 : '); 
$somme = $c1 + $c2 + $c3 + $c4; 
}
while( !(is_numeric($somme)) && $somme != 100);

     if($c2 <= 50 or $c3 < 50 or $c4 <=50)
    {
        if($c1 >= 12.5 & $c1 <= 50 )
        {
            if($c1 < $c2 or $c1 < $c3 or $c1 < $c4)
            {
                echo("le candidat  est au second tour ballotage défavorable");  
            }
            else
            {
                echo("le candidat  est au second tour ballotage favorable");
            }
        }
        else if($c1 <= 12.5)
        {
        echo("le candidat n1 est éliminer ");
        }
        else if($c1 >= 50)
        {
         echo("Le candidat n1 est elue");
        }

    }
    else
    {
    echo("c'est perdu pour candidat n1");
    }
  





