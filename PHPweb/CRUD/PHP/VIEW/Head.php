<!DOCTYPE html>
<html>
<head>
<?php

function chargerClasse($classe)
{
    if (file_exists("Php/controller/" . $classe . ".class.php"))
    {
        require "Php/controller/" . $classe . ".class.php";
    }
   

    if (file_exists("Php/model/" . $classe . ".class.php"))
    {
        require "Php/model/" . $classe . ".class.php";
    }


}
spl_autoload_register("chargerClasse");

// initialise une connection
DbConnect::init();
//Si le titre est indiqué, on l'affiche entre les balises <title>
echo (!empty($titre)) ? '<title>' . $titre . '</title>' : '<title> Titre de la page </title>';
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="CSS/style.css">
</head>


