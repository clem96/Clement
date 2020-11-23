<?php
class DbConnect {

    public static $db;

    public static function getDb(){
        return DbConnect::$db;
    }

    public static function init(){
        try{
            self::$db= new PDO('mysql:host=localhost;port=3307;dbname=stock;charset=utf8', 'root', '');
        }catch(Exception $e)
        {
            die('erreur : '. $e->getMessage());
        }
    }
}

