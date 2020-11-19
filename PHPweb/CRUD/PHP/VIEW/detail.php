<?php
include '../../head.php';
include '../../header.php';

//affiche le detail d'un produit par id 
$obj = ProduitsManager::findById($_get[id]);

echo'Information du produit : '.$obj->getLibelle().'<br>';
$obj->toString();

include '../../footer.php';