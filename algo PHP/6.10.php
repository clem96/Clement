<?php

$tabNum1 = [4, 8, 7, 9, 1, 5, 4, 6] ;
$tabNum2 = [7, 6, 5, 2, 1, 3, 7, 4];

// Parcour les 2 tableaux
for ($i=0; $i < count($tabNum1); $i++) { 
    echo $tabNum1 [$i] + $tabNum2 [$i] ."\n";
}