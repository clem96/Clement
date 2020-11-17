<?php
class ProduitsManager
{
    public static function add(Produits $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Produits (libelleProduits,prix,dateDePeremption) VALUES (:libelleProduits,:prix,:dateDePeremption)");
        $q->bindValue(":libelleProduits ", $obj->getLibelle());
        var_dump($q);
        $q->bindValue(":prix", $obj->getPrix()) ;
        $q->bindValue(":dateDePeremption", $obj->getDateDePeremption());

        $q->execute();
    }

    public static function update(Produits $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Produits SET libelleProduit=:libelleProduit, prix=:prix, dateDePeremption=:dateDePeremption WHERE idProduit=:idProduit");
        $q->bindValue(":libelleProduit", $obj->getLibelle());
        $q->bindValue(":prix", $obj->getPrix());
        $q->bindValue(":dateDePeremption", $obj->getDateDePeremption());
        $q->bindValue(":idProduit", $obj->getIdProduit());
        $q->execute();
    }

    public static function delete(Produits $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Produits WHERE idProduit = ". $obj->getIdProduits());
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
