<?php

$tab[0] = $tab1 = [1, 2, 3];
$tab[1] = $tab2 = [4, 5, 6];
$tab[2] = $tab3 = [7, 8, 9];

for ($i=0; $i < 3; $i++) { 
   for ($y=0; $y < 3; $y++) { 
       echo $tab[$i][$j] ."\n";
   }
}