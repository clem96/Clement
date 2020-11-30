<?php

$hotel = new Hotels($_POST);
$mode = $_GET['mode'];
var_dump($_POST);
switch ($mode)
{
    case "ajout":
    {
            HotelsManager::add($hotel);
            break;
        }
    case "modif":
            {
            HotelsManager::update($hotel);
            break;
        }
    case "delete":
            {
                var_dump($hotel);
            HotelsManager::delete($hotel);
            break
        ;
        }
}

//header("location: index.php?codePage=listeHotel");