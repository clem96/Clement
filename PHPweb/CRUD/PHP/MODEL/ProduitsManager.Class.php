<?php
class ProduitsManager
{
    public static function add(Produits $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO produits (idProduits,libelle,prix,dateDePeremption) VALUES (:idProduits,:libelleProduits,:prix,:dateDePeremption)");
        $q->bindValue(":idProduits", $obj->getIdProduits());
        $q->bindValue(":libelleProduits ", $obj->getLibelle());
        $q->bindValue(":prix", $obj->getPrix()) ;
        $q->bindValue(":dateDePeremption", $obj->getDateDePeremption());
        $q->execute();
    }

    public static function update(Produits $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE produits SET libelle=:libelle, prix=:prix, dateDePeremption=:dateDePeremption WHERE idProduit=:idProduit");
        $q->bindValue(":libelle", $obj->getLibelle());
        $q->bindValue(":prix", $obj->getPrix());
        $q->bindValue(":dateDePeremption", $obj->getDateDePeremption());
        $q->bindValue(":idProduit", $obj->getIdProduits());
        $q->execute();
    }

    public static function delete(Produits $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM produits WHERE idProduit = ". $obj->getIdProduits());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb() ;
        $id = (int) $id; 
        $q = $db->query("SELECT * FROM produits WHERE idProduits =".$id);
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

    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query(" SELECT * FROM produits ") ;
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Produits($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Produits
    }

}
