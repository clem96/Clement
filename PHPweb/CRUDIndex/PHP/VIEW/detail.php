<?php
$obj = ProduitsManager::findById($_GET['id']);

echo'<h1 class="dp row center">Detail du produit : '.$obj->getLibelle().'</h1>

        <form class="dp row center" method="post" action="index.php?root=traitement&action=modifier">
            <label for="id">Id produit :</label>
            <input value="'.$obj->getIdProduits().'" name="idProduits" type="text" >
            <label for="libelle">libelle :</label>
            <input value="'.$obj->getLibelle().'" name="libelle" type="text">
            <label for="prix">Prix : :</label>
            <input value='.$obj->getPrix().' name="prix" type="text">
            <label for="date">Date :</label>
            <input value='.$obj->getDateDePeremption().' name="DateDePeremption" type="text">
            <input class="green" type="submit" value="Modifier">
            <a href="index.php?root=traitement&action=supprimer&id='.$obj->getIdProduits().'"><input class="red"  value="Supprimer"></a>
        </form>';
        
    


 