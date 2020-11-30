<?PHP
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


function AfficherPage($page)
{
    $chemin = $page[0];
    $nom = $page[1];
    $titre = $page[2];

    include 'PHP/VIEW/Head.php';
    include 'PHP/VIEW/Header.php';
    include $chemin . $nom . '.php'; //Chargement de la page en fonction du chemin et du nom
    include 'PHP/VIEW/Footer.php';
}

//on active la connexion à la base de données
DbConnect::init();

$routes = [
    "default" => ["PHP/VIEW/", "form", "Page de connexion"],
    "accueil" => ["PHP/VIEW/", "accueil", "Page accueil"],
    "formadd" => ["PHP/VIEW/", "formadd", "Nouveau comte"],
    "traitement" => ["PHP/VIEW/", "traitement", "#"]
];

if (isset($_GET["root"]))
{

    $root = $_GET["root"];

    //Si cette route existe dans le tableau des routes
    if (isset($routes[$root]))
    {
        //Afficher la page correspondante
        AfficherPage($routes[$root]);
    }
    else
    {
        //Sinon afficher la page par defaut
        AfficherPage($routes["default"]);
    }

}
else
{
    //Sinon afficher la page par defaut
    AfficherPage($routes["default"]);

}
