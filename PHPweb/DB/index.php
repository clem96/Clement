<?php
require 'Personne.Class.php';

try
{
    $db = New PDO('mysql:host=localhost;port=3307;dbname=personne;charset=utf8', 'root', '');
}
catch(Exception $e)
{
   die('Erreur' . $e->getMessage());
};
echo"on est connecter à la base de donne";

$requette = $db->query("SELECT `IdPersonne`, `Nom`, `Prenom`, `age` FROM `test` WHERE IdPersonne = 1");
$rep = $requette->fetch(PDO::FETCH_ASSOC);

$personne = New Personne($rep);

echo 'Nom : '.$personne->getNom() .'<br>';
echo 'Prénom : '.$personne->getNom() .'<br>';
echo 'Age : '.$personne->getNom() .'<br>';
echo 'Id : '.$personne->getIdPersonne() .'<br>';

$q = $db->exec('INSERT INTO test(IdPersonne, Nom, Prenom, age) VALUES(NULL, "lepont", "Jean", 56)');
var_dump($q);

$perso = new Personne(["nom"=>"Thomas","prenom"=>"toto","age"=>15]);
$q = $db->prepare('INSERT INTO test(IdPersonne, Nom, Prenom, age) VALUES(null, :nom, :prenom, :age)');
$q->bindValue(':nom', $perso->getNom());
$q->bindValue(':prenom', $perso->getPrenom());
$q->bindValue(':age', $perso->getAge());

$reponse = $q->execute();
var_dump($reponse);

$requete = $db->query("SELECT idPersonne, nom, prenom, age FROM test "); // $requete est un objet de type PDO_Statement
while ($donnees = $requete->fetch(PDO::FETCH_ASSOC)) // le while permet de boucler sur les enregistrements
// il s'arrete quand fetch renvoi false
{
    var_dump($donnees);
    $personnes[] = new Personne($donnees);
}
var_dump($personnes);

