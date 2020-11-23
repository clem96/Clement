<?php

include "PHP/VIEW/Head.php";
include "PHP/VIEW/Header.php";

$tab = ProduitsManager::getList();

foreach ($tab as $element) {
    $nom = $element->getLibelle();
    echo'<div class="case row">
    Nom du produit : ' . $nom .  
    '<a href="PHP/VIEW/FormModif.php?id='.$element->getIdProduits().'"><button class="green">Modifier</button></a>
    <a href="PHP/VIEW/detail.php?id='.$element->getIdProduits().'"><button>Detail</button></a> 
    <a href="PHP/VIEW/FormSupp.php?id='.$element->getIdProduits().'"><button class="red">Supprimer</button></a>
    </div>';
};
include "PHP/VIEW/Footer.php";
