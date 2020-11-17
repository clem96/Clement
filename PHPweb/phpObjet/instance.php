<?php

function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");

$per1 = new Personne(["nom"=>"dupont", "prenom"=>"jean" ,"age"=>35]);
$per2 = new Personne(["nom"=>"legrand", "prenom"=>"luc" ,"age"=>30]);
$per3 = new Personne(["nom"=>"toir", "prenom"=>"pierre" ,"age"=>40]);