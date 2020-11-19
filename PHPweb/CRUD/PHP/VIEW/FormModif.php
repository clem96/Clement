<?php
 include "Head.php";
 include "Header.php";

$prod = ProduitsManager::findById($_get[id]);

echo'<h1 class="dp row center">Formulaire Suppersion Modification</h1>
        <form class="dp row center" methode="post" action="Traitement.php">
            <label for="libelle">libelle :</label>
            <input placeholder='.$prod->getLibelle().'neam="libelle" type="text">
            <label for="prix">Prix : :</label>
            <input placeholder='.$prod->getPrix().'neam="prix" type="text">
            <label for="date">Date :</label>
            <input placeholder='.$prod->getDateDePeremption().'neam="date" type="text">
            <input class="red" type="submit" value="SUPPRIMER">
        </form>';

 include "PHP/VIEW/Footer.php";
