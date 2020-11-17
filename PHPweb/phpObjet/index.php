<?php
require 'instance.php'
'<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>'
     for($i=0, i<count($per), $i++)
     {
        echo'<div class="case"><p>' .$per[$i]->getNom().'</p></div>'
     }'
</body>
</html>'
?>