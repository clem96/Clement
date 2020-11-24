<?php
$action = $_GET['action'];
var_dump($_POST);

$obj = new Station($_POST);
var_dump($obj);
switch ($action) {
    case 'modifier': 
        {
            StationsManager::update($obj);
    break;
        }
    case 'supprimer': 
        {
            StationsManager::delete($obj);
    break;
        }
    case 'ajout': 
        {
        StationsManager::add($obj);
    break;
        }
}
 //header('location:index.php');