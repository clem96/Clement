<?php
function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");

//instanciation
$joueur = new Joueur(["pointvie"=>50, "monstredifficile"=>0, "monstrefacile"=>0]);
$monstredif = new MonstreDifficile([]);
$monstrefac = new MonstreFacile(["pointvie"=>50, "estvivant"=>true, "de"=>0]);

//choix du monstre facile ou difficile
$type =0;
$num = rand(1, 2);
if($num == 1)
{
 $atkM = $monstrefac->monstreFacAttaque();
 $type = 0;
}
else
{
 $atkM = $monstrefac->monstreFacAttaque();
 $type = 1;
}



if($joueur->attaque()<$atkM)
{
  //joueur perds avec un mostre difficile
  if($type == 1)
  {
    
  }
}else
{
 
 $joueur->setPointvie(+2);
}


