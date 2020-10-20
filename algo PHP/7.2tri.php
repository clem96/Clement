<?php

$tab = [50, 20, 12, 5];


$mini = 0;
for ($i=0; $i < count($tab)-1 ; $i++) {
  $mini = $tab[$i];
  $pos = $i;
  for ($j=$i+1; $j < count($tab); $j++) { 

    if($tab[$j] < $mini){
      $mini = $tab[$j];
      $pos = $j;
    }

  }
  $tab[$pos] = $tab[$i];
  $tab[$i] = $mini;
}

foreach($tab as $element){
  echo($element ."\n");  
}
