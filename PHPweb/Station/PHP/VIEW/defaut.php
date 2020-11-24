<?php
$tab = StationsManager::getList();
echo'<a href="index.php?root=formulaire&action=ajout"><button>Ajouter</button></a>';
foreach ($tab as $element) {
    echo'<div class="case row">
    Nom de la station : ' . $element->getNomStation().  
    '<a href="index.php?root=formulaire&id='.$element->getIdStation().'&action=modif"><button class="green">Modifier</button></a>
    <a href="index.php?root=formulaire&id='.$element->getIdStation().'&action=detail"><button>Detail</button></a>
    <a href="index.php?root=formulaire&id='.$element->getIdStation().'&action=supprimer"><button class="red">Supprimer</button></a>
    </div>';
};

