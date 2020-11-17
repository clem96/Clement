<?php

include "PHP/VIEW/Head.php";
include "PHP/VIEW/Header.php";

//recherche par id
$recherche = ProduitsManager::findById(4);
var_dump($recherche);

//supprime un produit par son id 
$psup = ProduitsManager::findById(4);
ProduitsManager::delete($psup);

$newproduit = new Produit(["libelle" => "cahier", "prix" => 5, "dateDePeremption" => '2020-12-31']);
ProduitsManager::add($newproduit);

$liste[]=ProduitsManager::getList();
foreach($liste as $elemnt)
{
echo $elemnt->toString() .'<br>';
}

include "PHP/VIEW/Footer.php";




