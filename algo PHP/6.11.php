<?php

$tabNum1 = [4, 8, 7, 12];
$tabNum2 = [3, 6];

$resulta = 0;
for ($i = 0; $i < 2; $i++) { 
    for ($y=0; $y < 4; $y++) { 
       $resulta += $tabNum1[$y] * $tabNum2[$i];
       
    }
}
echo("Resulta du schtroumpf : $resulta \n");