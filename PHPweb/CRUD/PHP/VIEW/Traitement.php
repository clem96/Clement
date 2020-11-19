<?php
include 'Head.php';
//supprime un produit par son id
$obj = ProduitsManager::findById($_get[id]);
ProduitsManager::delete($obj);