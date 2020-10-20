<?php
function ChargerClasse($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");

$n = new Heritage([]);

$p = new Demo(["largeur"=>10, "hauteur"=>20]);

toString();

