<?php
//Autolaoder
function ChargerClasse($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");

//instanciation
$document1 = new Document(["auteur" => "Mark", "titre" => "Hello", "dispo" => true]);
$document2 = new Document(["auteur" => "Nicolas", "titre" => "Recette facil", "dispo" => false]);
$document3 = new Document(["auteur" => "Jean", "titre" => "le Moulin", "dispo" => true]);

$document1->toString();
$document2->toString();
$document3->toString();

//instanciation 
$auteur = new Auteur(["nom"=>"Levi", "prenom"=>"mark", "naissance"=>"1945.10.20", "deces"=>false]);
$auteur->toString();