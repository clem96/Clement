<?php

$tab = [20, 8, 7, 12, 50];

do{
 $yapermut = false;
for ($i=0; $i < count($tab)-1; $i++) { 
    if($tab[$i] > $tab[$i +1]){
        $temp = $tab[$i];
        $tab[$i] = $tab[$i + 1 ];
        $tab[$i +1] = $temp;
        $yapermut = true;
    }
}  

}while($yapermut);

foreach ($tab as $case) {
echo($case ."\n");
}
