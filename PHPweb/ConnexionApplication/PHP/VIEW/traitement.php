<?php
$mode = $_GET['mode'];
if ($mode == 'connexion') {
    $user = UtilisateursManager::findByPseudo($_POST['pseudo']);
    if ($user != false) {
        if ($user->getMotdepasse() == md5($_POST['motdepasse'])) {
            $_SESSION['user']= $user;
            header("refresh:3;url=index.php?root=accueil");
        } else {
            echo 'mot de pass incorect';
        }
    } else {
        echo 'le pseudo n\'existe pas';
    }
} elseif ($mode == 'ajout') {

    if ($_POST['motdepasse'] == $_POST['confirmation']) {
        //creation nouvelle utilisateur
        $uti = UtilisateursManager::findByPseudo($_POST['pseudo']);
        if ($uti == false) {
            $user = new Utilisateurs($_POST);
            $user->setMotdepasse(md5($user->getMotdepasse()));
            UtilisateursManager::add($user);
        } else {
            echo 'le pseudo existe deja';
        }
    } else {
        echo 'les mots de passe pas identique';
    }

    header("refresh:3;url=location:index.php?root=defaut");
} elseif ($mode == 'deconnection') {
    session_destroy();
    header("location:index.php?root=defaut");
}
