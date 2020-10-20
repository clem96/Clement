<?php

function plateauPlein($plateau, $jeu)
{
    if ($jeu == "p") {
        for ($i = 0; $i < count($plateau); $i++) {
            if (in_array(".", $plateau[$i])) {
                return false;
            }
        }
        return true;
    } else {

        for ($i = 0; $i < count($plateau); $i++) {
            if (in_array(".", $plateau[$i])) {
                return false;
            }
        }
        return true;

    }

}
