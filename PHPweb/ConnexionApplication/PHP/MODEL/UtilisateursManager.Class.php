<?php
class UtilisateursManager
{
    public static function add(Utilisateurs $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO `utilisateurs`(`idUtilisateur`, `nom`, `prenom`, `pseudo`, `motdepasse`, `comte`, `email`) VALUES (:id,:nom,:prenon,:pse,:pass,:comte,:email)");
        $q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
        $q->bindValue(":nom ", $obj->getnom());
        $q->bindValue(":prenom", $obj->getPrenom()) ;
        $q->bindValue(":pse", $obj->getPseudo());
        $q->bindValue(":pass", $obj->getMotdepasse()) ;
        $q->bindValue(":comte", $obj->getComte()) ;
        $q->bindValue(":email", $obj->getEmail());
        $q->execute();
    }

    public static function update(Utilisateurs $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE `utilisateurs` SET `idUtilisateur`=:id,`nom`=:nom,`prenom`=:prenom,`pseudo`=:pse,`motdepasse`=:pass,`comte`=:comte,`email`=:email WHERE id =".$obj->getIdUtilisateur());
        $q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
        $q->bindValue(":nom ", $obj->getnom());
        $q->bindValue(":prenom", $obj->getPrenom()) ;
        $q->bindValue(":pse", $obj->getPseudo());
        $q->bindValue(":pass", $obj->getMotdepasse()) ;
        $q->bindValue(":comte", $obj->getComte()) ;
        $q->bindValue(":email", $obj->getEmail());
        $q->execute();
    }

    public static function delete(Utilisateurs $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM utilisateurs WHERE idUtilisateur = ". $obj->getIdUtilisateur());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb() ;
        $id = (int) $id; 
        $q = $db->query("SELECT * FROM utilisateurs WHERE idUtilisateur =".$id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Produits($results);
        }
        else
        {
            return false;
        }
    }

    public static function findByPseudo($pse)
    {
        $db = DbConnect::getDb() ;
        $q = $db->query("SELECT * FROM utilisateurs WHERE idUtilisateur ='" . $pse . "'");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Utilisateurs($results);
        }
        else
        {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query(" SELECT * FROM utilisateurs ") ;
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Utilisateurs($donnees);
            }
        }
        return $liste;  
    }

}
