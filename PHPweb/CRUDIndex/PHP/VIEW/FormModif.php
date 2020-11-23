<?php
$obj = ProduitsManager::findById($_GET['id']);

echo'<h1 class="dp row center">Formulaire Modification/Suppresion</h1>

        <form class="dp row center" method="post" action="index.php?root=traitement&action=modifier">
            <label for="id">Id produit :</label>
            <input value="'.$obj->getIdProduits().'" name="idProduits" type="text" disable>
            <label for="libelle">libelle :</label>
            <input value="'.$obj->getLibelle().'" name="libelle" type="text">
            <label for="prix">Prix : :</label>
            <input value='.$obj->getPrix().' name="prix" type="text">
            <label for="date">Date :</label>
            <input value='.$obj->getDateDePeremption().' name="DateDePeremption" type="text">
            <input class="green" type="submit" value="Modifier">
        </form>
        <a href="index.php?root=traitement&action=supprimer&id='.$obj->getIdProduits().'"><input class="red"  value="Supprimer"></a>';
    


 