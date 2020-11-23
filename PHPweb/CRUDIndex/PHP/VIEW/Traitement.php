<?php

$action = $_GET['action'];

if($action == 'modifier')
{
$obj = new Produits($_POST);
ProduitsManager::update($obj);

}elseif($action == 'supprimer')
{
    
    $obj = ProduitsManager::findById($_GET['id']);
    ProduitsManager::delete($obj);
    header('location:index.php');
}
elseif($action == "ajout")
{
$prod = new Produits($_POST);
var_dump($prod);
ProduitsManager::add($prod);
}

