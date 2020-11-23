<?php
 include "Head.php";
 include "Header.php";

$obj = ProduitsManager::findById($_GET['id']);


echo'<h1 class="dp row center">Formulaire Suppersion</h1>

        <form class="dp row center" methode="post" action="delete.php">
            <label for="id">Id produit :</label>
            <input placeholder="'.$obj->getIdProduits().'" neam="id" type="text" "disable">
            <label for="libelle">libelle :</label>
            <input placeholder="'.$obj->getLibelle().'" neam="libelle" type="text">
            <label for="prix">Prix : :</label>
            <input placeholder='.$obj->getPrix().' neam="prix" type="text">
            <label for="date">Date :</label>
            <input placeholder='.$obj->getDateDePeremption().' neam="date" type="text">
            <input class="red" type="submit" value="SUPPRIMER">
        </form>';
    
 include "Footer.php";
 