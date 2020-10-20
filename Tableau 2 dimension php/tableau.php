<?php

$tab[0] = [1, 2, 3];
$tab[1] = [4, 5, 6];
$tab[2] = [7, 8, 9];


$tiret = "  _____"; 


for ($i=0; $i < 3; $i++) { 
  echo $tiret.$tiret.$tiret;
  echo("\n\n");
   for ($y=0; $y < 3; $y++) {
       echo("  |  ");
       echo $tab[$i][$y]; 
   } 
   echo("  |");
   echo("\n");
}
echo $tiret.$tiret.$tiret ."\n";






