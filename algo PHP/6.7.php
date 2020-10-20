<?php
require "fonction.php";

 $somme = 0;
 for ($i=0; $i < 9; $i++) { 
 $note = nombreEntier("Etrez une note"); 
 $somme += $note; 
 }

$moyenne = $somme / $i;
echo('Calcul ' .$somme ." / " .$i ."\n");
echo("Voici la moyenne : $moyenne");

