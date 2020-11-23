<?php
$tab = ProduitsManager::getList();
echo'<a href="index.php?root=ajout"><button>Ajouter</button></a>';
foreach ($tab as $element) {
    $nom = $element->getLibelle();
    echo'<div class="case row">
    Nom du produit : ' . $nom .  
    '<a href="index.php?id='.$element->getIdProduits().'&root=modif"><button class="green">Modifier/Supprime</button></a>
    <a href="index.php?id='.$element->getIdProduits().'&root=detail"><button>Detail</button></a>
    </div>';
};

