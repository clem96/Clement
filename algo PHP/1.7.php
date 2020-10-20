<?php
$a = readline("Entrez la valeur a :");
$b = readline("Entrez la valeur b :");
$c = readline("Entrez la valeur c :");

$tempo = $b;
$b = $a;
$a = $c;
$c = $tempo;

echo $a;
echo $b;
echo $c;