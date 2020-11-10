<?php
//charge les class
function ChargerClasse($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");

$compte1 = new Compte(["numero" => "50236R", "montant" => 120]);
$livret1 = new Livret(["numero" => "45789L", "montant" => 1200]);
$client1 = new Client(["nom" => "Dupont", "prenom" => "Paul", "compte" => $compte1, "livret" => $livret1]);

//appel les methodes de la class Client
$client1->recevoir(50);
$client1->depenser(10);
$client1->epargner(100);

echo $client1->affiche();
