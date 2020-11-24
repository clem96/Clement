<?php
class StationsManager
{
    public static function add(Station $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO `stations`(`nomStation`, `altitudeStation`) VALUES (:id,:nom,:alt)");
        $q->bindValue(":nom", $obj->getNomStation()) ;
        $q->bindValue(":alt", $obj->getAltitudeStation());
        $q->execute();
    }

    public static function update(Station $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE `stations` SET `idStation`=:id,`nomStation`=:nom,`altitudeStation`=:alt WHERE idStation=:id");
        $q->bindValue(":id ", $obj->getIdStation());
        $q->bindValue(":nom", $obj->getNomStation()) ;
        $q->bindValue(":alt", $obj->getAltitudeStation());
        $q->execute();
    }

    public static function delete(Station $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM stations WHERE idStation = ". $obj->getIdStation());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb() ;
        $id = (int) $id; 
        $q = $db->query("SELECT * FROM stations WHERE idStation =".$id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Station($results);
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
        $q = $db->query(" SELECT * FROM stations ") ;
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Station($donnees);
            }
        }
        return $liste;  // tableau contenant les objets station
    }

}
