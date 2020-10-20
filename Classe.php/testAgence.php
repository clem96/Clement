<?php
function ChargerClasse($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");

$a1 = new Agence(["nom" => "Dunkerque", "addresse" => "21 rue Roger", "cp" => 59140, "ville" => "Dunkerque", "restauration" => "non"]);
$a2 = new Agence(["nom" => "Lille", "addresse" => "57 rue Pierre", "cp" => 59280, "ville" => "Lille", "restauration" => "non"]);
$a3 = new Agence(["nom" => "Paris", "addresse" => "58 rue Eiffel", "cp" => 6200, "ville" => "Paris", "restauration" => "oui"]);
$a4 = new Agence(["nom" => "Lyon", "addresse" => "99 rue Royer", "cp" => 5600, "ville" => "Lyon", "restauration" => "oui"]);

//instanciation
$n[] = new Employe(["nom" => "Dupont ", "prenom" => "thomas ", "date" => new dateTime('2000-12-01'), "poste" => " dev ", "salaire" => 20, "service" => " informatique ", "prime" => 10, "Agence" => $a1]);
$n[] = new Employe(["nom" => "Durand ", "prenom" => "maxime ", "date" => new dateTime('2000-5-01'), "poste" => " dev ", "salaire" => 20, "service" => " informatique ", "Agence" => $a2]);
$n[] = new Employe(["nom" => "lepat ", "prenom" => "eric ", "date" => new dateTime('2001-4-01'), "poste" => " dev ", "salaire" => 20, "service" => " maintenace ", "Agence" => $a3]);
$n[] = new Employe(["nom" => "pierre ", "prenom" => "paul ", "date" => new dateTime('2010-12-01'), "poste" => " bb ", "salaire" => 20, "service" => " RH ", "Agence" => $a4]);

echo $n[0]->toString(); 
echo $n[1]->toString();
echo $n[2]->toString();
echo $n[3]->toString();

//si date du jour avant le jour de paye des primes alors on paye
$auj = new DateTime();
$jourDePrime = (new DateTime())->setDate($auj->format('Y'), 11, 30);
if ($jourDePrime < $auj) {
    echo "l'ordre de transfert a été envoyé à la banque \n";
} else {
    echo "L'ordre de transfert n'a pas été envoyé à la banque \n";
}

//triage par ordre alphab service nom et prenom
usort($n, array("Employe", "compareToServiceNomPrenom"));

foreach ($n as $elmet) {
    echo $elmet->toString();
    echo "\n";
}

//masse salariale
$masse = 0;
foreach ($n as $elmet) {
    $masse += $elmet->masseSalariale();
}
echo "Masse salariale : " . $masse;
