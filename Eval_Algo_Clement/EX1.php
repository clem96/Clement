<?php

// verifie la saisie pour un nombre
function nombre($text)
{
      do
      {
      $num = readline("$text");
      }while( ! is_numeric($num));  
    
      return $num;
}

//Boucle pour refaire plusieur calcul.
do
{
$rayon = nombre("Quel est le rayon du cercle : \n");
$circoference = 2 * 3.1416 * $rayon;
$surface = 3.1416 * $rayon * $rayon;

echo("Sa circonférence est de \t : ".$circoference."\n");
echo("Sa surface est de \t :".$surface."\n");

//Demande à l'utilisateur si il a un autre calcul à faire.
$flag = readline('Voulez-vous faire un autre calcul (O/N) : ');
}while($flag == "O" );

echo('Au revoir et à bientôt!');

