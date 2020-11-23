<?php
include 'Head.php';

$obj = new Produits($_POST);
ProduitsManager::update($obj);