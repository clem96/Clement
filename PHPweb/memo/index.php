<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memo</title>
</head>
<body>

<?php
$num = rand(0,8);
for($i=0;$i<4;$i++){
    for ($y=0; $y<4; $y++) { 
        echo' <div class="row"><div class="case"><img class="fond" src="plage.jpg" alt="image"> <img class="img" src='$i' alt="image"></div></div>';
    }
     
}
?>

</body>
</html>