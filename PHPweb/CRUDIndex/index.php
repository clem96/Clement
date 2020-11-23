<?php

/* Autoload permet de charger toutes les classes necessaires */
function ChargerClasse($classe)
{
    if (file_exists("PHP/CONTROLLER/" . $classe . ".Class.php"))
    {
        require "PHP/CONTROLLER/" . $classe . ".Class.php";
    }
    if (file_exists("PHP/MODEL/" . $classe . ".Class.php"))
    {	
        require "PHP/MODEL/" . $classe . ".Class.php";
    }
}
spl_autoload_register("ChargerClasse");

function afficherPage($tab){

    $chemin = $tab[0];
    $nom = $tab[1];
    $titre = $tab[2];
    $titre;

    include "PHP/VIEW/Head.php";
    include $chemin.$nom.'.php';
    include "PHP/VIEW/Footer.php";
}
// initialise une connection
DbConnect::init();

$chemin = [
"defaut" => ["PHP/VIEW/","defaut","Accueil"],
"detail" => ["PHP/VIEW/","detail","Détail"],
"ajout" => ["PHP/VIEW/","FormAdd","Ajouter"],
"modif" => ["PHP/VIEW/","FormModif","Modif"],
"traitement" => ["PHP/VIEW/","Traitement","Modif"],
];



if(isset($_GET['root']))
{
    //recupere dans l url la valeur de root
    $root = $_GET['root'];

    if(isset($chemin[$root]))
    {
        afficherPage($chemin[$root]);
    }
    else
    {
        afficherPage($chemin["defaut"]);
    }
}else{
    afficherPage($chemin["defaut"]);
}


