<?php
class De
{
 static function lanceLeDe()
    {
        //boucle pour touver un entier aleatoire
        do
        $num = rand(0, 6);
        while(! is_int($num ) );
        return $num;
        
    }

  
}