<?php

include "PHP/VIEW/Head.php";
include "PHP/VIEW/Header.php";


//recherche par id
$recherche = ProduitsManager::findById(4);
var_dump($recherche);

//supprime un produit par son id 
$psup = ProduitsManager::findById(4);
ProduitsManager::delete($psup);

$newproduit = new Produits(["libelle" => "cahier", "prix" => 5, "dateDePeremption" => '2020-12-31']);
ProduitsManager::add($newproduit);

$liste=ProduitsManager::getList();
foreach($liste as $ele)
{
echo $ele->toString() .'<br>';
};

//*********clients***********/

//recherche par id
$resultat = ClientsManager::findById(6);
var_dump($resultat);

//suppersion par id
$supp = ClientsManager::findById(1);
var_dump($supp);
ClientsManager::delete($supp);

//ajout
$newClients = new Clients(["idClients"=>"23", "nom"=>"test", "prenom"=>"test", "age"=>30]);
ClientsManager::add($newClients);

$liste=ClientsManager::getList();
foreach($liste as $ele)
{
echo $ele->toString() .'<br>';
};

include "PHP/VIEW/Footer.php";




