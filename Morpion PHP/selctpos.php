<?php
function selectionPosition($plateau, $jeu)
{
    //si jeu = p puissance 4
    if ($jeu == "p") {
        //demande à l'utilisateur la colonne dans laquelle il veut jouer, vérifie que cette case appartient bien au tableau et n'est pas pleine,
        //détermine la ligne a laquelle le pion tombe
        do {
            do//boucle pour verifier si les position existe dans le plateau
            {
                    do// boucle pour la saisie et verifier si la chaine est bien alpha numerique 1 caractere 
                    {

                        $chaine = readline("veuillez saisir la colonne pour votre pion: ");

                    } while (strlen($chaine) > 1  || !ctype_alnum($chaine));
              

                $positions = conversionPosition($chaine);
                $lig = $positions[0];
                $col = $positions[1];

            } while ($lig >= count($plateau) && $col >= count($plateau[0]));

        } while ($plateau[$lig][$col] == ".");
        
        
        return $positions;
     
    } else {
        do {
            do//boucle pour verifier si les position existe dans le plateau
            {

                do//boucle pour verifier la position du caractere alpha au debut ou a la fin de la chaine de caractere
                {

                    do// boucle pour la saisie et verifier si la chaine est bien alpha numerique de 2 ou 3 caractères
                    {

                        $chaine = readline("veuillez saisir les cooedonees de votre pion: ");

                    } while (strlen($chaine) > 3 || strlen($chaine) == 1 || !ctype_alnum($chaine));
                } while (!ctype_alpha($chaine[0]) xor !ctype_alpha($chaine[strlen($chaine) - 1]));

                $positions = conversionPosition($chaine);
                $lig = $positions[0];
                $col = $positions[1];

            } while ($lig >= count($plateau) && $col >= count($plateau[0]));

        } while ($plateau[$lig][$col] == ".");
        return $positions;
    }
}

selectionPosition( ,"p")