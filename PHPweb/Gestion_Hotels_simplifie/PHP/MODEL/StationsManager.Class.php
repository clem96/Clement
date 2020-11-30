<?php

class StationsManager 
{
	public static function add(stations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO `stations`(`idStation`, `nomStation`, `altitudeStation`) VALUES (:id,:nom,:alt)");
		$q->bindValue(":id", $obj->getIdStation());
		$q->bindValue(":nom", $obj->getNomStation());
		$q->bindValue(":alt", $obj->getAltitudeStation());
		$q->execute();
	}

	public static function update(stations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE `stations` SET `idStation`=:id,`nomStation`=:nom,`altitudeStation`=:alt,WHERE idStation='.$obj->getId().'");
		$q->bindValue(":id", $obj->getIdStation());
		$q->bindValue(":nom", $obj->getNomStation());
		$q->bindValue(":alt", $obj->getAltitudeStation());
		$q->execute();
	}
	public static function delete(stations $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM stations WHERE idStation=" .$obj->getIdStation());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT `idStation`, `nomStation`, `altitudeStation` FROM stations WHERE idStation='.$id.'");
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Stations($results);
		}
		else
		{
			return false;
		}
	}
	public static function getList()
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM stations");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Stations($donnees);
			}
		}
		return $liste;
	}
}