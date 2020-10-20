<?php
//Autolaoder
function ChargerClasse($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");

//instanciation de Document et de Auteur
$document1 = new Document(["auteur" => new Auteur(["nom" => "Levi", "prenom" => "mark", "naissance" => new dateTime(2010 - 10 - 20), "deces" => new DateTime(2010 - 20 - 12)]), "titre" => "Le Moulin", "dispo" => false]);
$document2 = new Document(["auteur" => new Auteur(["nom" => "Thomas", "prenom" => "mark", "naissance" => new dateTime(2000 - 12 - 02), "deces" => new DateTime(2010 - 20 - 12)]), "titre" => "Recette facil", "dispo" => true]);
$document3 = new Document(["auteur" => new Auteur(["nom" => "Thomas", "prenom" => "mark", "naissance" => new dateTime(2000 - 12 - 02), "deces" => new DateTime(2010 - 20 - 12)]), "titre" => "Recette facil", "dispo" => true]);

$document1->toString();
$document2->toString();
$document3->toString();

//appel de la methode static compareTo avec 2 obj identique 
Document::compareTo($document2, $document3);

//appel de la methode static compareTo avec 2 obj differents
Document::compareTo($document1, $document2);

//appel de la methode equalsTo sur une instance 
$document1->equalsTo($document2);
