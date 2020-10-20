<?php
function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");

$cat1 = new Categorie(["libelle"=>"", "tva"=>20]);
$prod = new Produit(["numero"=>10002,"prixht"=>5,"designation"=>"tomates","couleur"=>"rouge","datevalid"=>201031,"categorie"=>"fruit","stockage"=>"froid"]);
$prod = new Produit(["numero"=>15001,"prixht"=>0.80,"designation"=>"croissant","couleur"=>"","datevalid"=>201031,"categorie"=>"boulangerie","stockage"=>"sec"]);
$prod = new Produit(["numero"=>80001,"prixht"=>2,"designation"=>"tomates","couleur"=>"rouge","datevalid"=>201031,"categorie"=>"fruit","stockage"=>"froid"]);