<?php
require 'head.php';
echo'<h1 class="dp row center">Formulaire d\'ajout</h1>
        <form method="post" action="index.php?root=traitement&action=ajout">
            <label for="libelle">libelle :</label>
            <input name="libelle" type="text">
            <label for="prix">Prix : :</label>
            <input name="prix" type="text">
            <label for="date">Date :</label>
            <input name="date" type="text">
            <button type=submit>Ajouter<button>
            <button><a href="index.php">Retour</a><button>
        </form>';
    

