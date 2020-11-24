<?php

$action = $_GET['action'];

//retoutne un obj de type Station
if(isset($_GET['id']))
{
$obj = StationsManager::findById($_GET['id']);
}
else
{
$obj = new Station($_POST);   
}

//desactive les champs si en mode supprimer ou detail
$affiche = '';
if($action == 'supprimer' || $action == 'detail')
{
  $affiche = 'disabled';
}

//si action ajout champs vide
$id = $obj->getIdStation();
$nomStation = $obj->getNomStation();
$altitude = $obj->getAltitudeStation(); 
if($action == 'ajout')
{
    $id = "";
    $nomStation = "";
    $altitude = "";
}
 
echo'<h3 class="dp row center">'if($root=="ajout"){echo 'ajout';}elseif($root=="modif"){echo'modification';}elseif($root=="supprimer"){echo'suppression';}'</h3>

        <form class="dp row center" method="post" action="index.php?root=traitement&action='.$action.'&id='.$obj->getIdStation().'">
            <label for="idStation">Id station :</label>
            <input value="'.$obj->getIdStation().'" name="idStation" disabled>

            <label for="nomStation">nomStation :</label>
            <input value="'.$nomStation.'" name="nomStation" '.$affiche.'>

            <label for="altitudeStation">altitudeStation : :</label>
            <input value="'.$altitude.'" name="altitudeStation" '.$affiche.'>';


//affiche le bouton 
switch($action)
{
    case 'ajout':
    {
        echo'<button class="green" type="submit">Ajouter</button>
        </form>';
    break;
    }
    case 'modif':
    {
        echo'<button class="green" type="submit">Modifier</button>
        </form>'; 
    break;
    }
    case 'supprimer':
    {
        echo'<button class="red" type="submit" >Supprimer</button>
        </form>'; 
    break; 
    }
 }
echo'<a href="index.php?root=defaut"><button>Retour</button></a>';
   


 