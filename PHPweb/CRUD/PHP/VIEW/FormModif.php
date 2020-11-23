<?php
 include "Head.php";
 include "Header.php";

$obj = ProduitsManager::findById($_GET['id']);


echo'<h1 class="dp row center">Formulaire Modification</h1>

        <form class="dp row center" methode="post" action="Traitement.php">
            <label for="id">Id produit :</label>
            <input value="'.$obj->getIdProduits().'" neam="id" type="text" disable>
            <label for="libelle">libelle :</label>
            <input value="'.$obj->getLibelle().'" neam="libelle" type="text">
            <label for="prix">Prix : :</label>
            <input value='.$obj->getPrix().' neam="prix" type="text">
            <label for="date">Date :</label>
            <input value='.$obj->getDateDePeremption().' neam="date" type="text">
            <input class="green" type="submit" value="Modifier">
        </form>';
    

 include "Footer.php";
 