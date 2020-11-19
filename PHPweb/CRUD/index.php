<?php

include "PHP/VIEW/Head.php";
include "PHP/VIEW/Header.php";


echo'<a href="PHP/VIEW/FormAdd.php"><button class="green">Nouveau produit</button></a>';

$tab = ProduitsManager::getList();
foreach ($tab as $element) {
    $nom = $element->getLibelle();
    echo'<div class="case row">
    Nom du produit : ' . $nom .  
    '<a href="PHP/VIEW/FormModif.php"><button class="green">Modifier</button></a>
    <a href="PHP/VIEW/detail.php"><button>Detail</button></a> 
    <a href="PHP/VIEW/Taitement.php"><button class="red">Supprimer</button></a>
    </div>';
};
include "PHP/VIEW/Footer.php";
