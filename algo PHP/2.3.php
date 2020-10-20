<?php
$num = readline("Entrez le nb d'article : ");
$prix = readline("Entrez le prix HT : ");
$tva = readline("Entrez la TVA : ");


$somme = $prix + $prix / 100 * $tva;
$total = $somme * $num;
echo"Total a payer : $total";