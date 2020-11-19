<?php
class ClientsManager
{
    public static function add(Clients $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO produits (idClients,nom,prenom,age) VALUES (:idClients,:nom,:prenom,:age)");
        $q->bindValue(":idClients", $obj->getIdClients());
        $q->bindValue(":nom", $obj->getNom());
        $q->bindValue(":prenom", $obj->getPrenom());
        $q->bindValue(":age", $obj->getAge());
        $q->execute();
    }

    public static function update(Clients $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Clients SET idClients=:idClients, nom=:nom, prenom=:prenom; age=:age WHERE idClients=:idClients");
        $q->bindValue(":idClients", $obj->getIdClients());
        $q->bindValue(":nom", $obj->getNom());
        $q->bindValue(":prenom", $obj->getPrenom()) ;
        $q->bindValue(":age", $obj->getAge());
        $q->execute();
    }

    public static function delete(Clients $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Clients WHERE idClients = ". $obj->getIdClients());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb() ;
        $id = (int) $id; 
        $q = $db->query("SELECT * FROM Clients WHERE idClients =".$id);
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
        $q = $db->query(" SELECT * FROM Clients ") ;
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Produits($donnees);
            }
        }
        return $liste;  // tableau contenant les objets clients
    }

}
