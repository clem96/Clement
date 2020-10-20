<?php
$tab = [10, 20, 35, 40, 50];

for ($i=0; $i < count($tab)-1; $i++) { 
$tab[count($tab)] = $tab[$i];
}

foreach($tab as $elemt){
    echo($elemt ."\n");
}