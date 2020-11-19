<?php
 include "PHP/VIEW/Head.php";
 include "PHP/VIEW/Header.php";

echo'<h1 class="dp row center">Formulaire</h1>
        <form methode="post" action="Traitement.php">
            <label for="libelle">libelle :</label>
            <input neam="libelle" type="text">
            <label for="prix">Prix : :</label>
            <input neam="prix" type="text">
            <label for="date">Date :</label>
            <input neam="date" type="text">
            <input type="submit">
        </form>';

 include "PHP/VIEW/Footer.php";
