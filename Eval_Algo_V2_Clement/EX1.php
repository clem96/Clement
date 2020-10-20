<?php
//interoge l'utilisateur pour une temperature en c°
$temperature = readline("Entrer un temperature en C° : ");

//verifie la temperature et afficher pour chaque état
if ($temperature >= 100) {
    echo ("A cette temperature l'eau se vaporise.");
} else if ($temperature <= 0) {
    echo ("A cette temperature l'eau est solide.");
} else {
    //dans tout les autres cas
    echo ("A cette temperature l'eau est liquide.");
}
