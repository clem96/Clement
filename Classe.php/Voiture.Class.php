<?php
class Voiture
{

//attribut
    private $_marque;
    private $_model;
    private $_km;

    public function __construct( array $option = [])
    {
     if(!empty($option))
     {
         $this->hydrate($option);
     }
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value)
        {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }

//ASSESEUR 
//getter

    public function getMarque()
    {
        return $this->_marque;
    }

    public function getModel()
    {
        return $this->_model;
    }

    public function getKm()
    {
        return $this->_km;
    }
//setter

    public function setMarque($m)
    {
        $this->_marque = $m;
    }

    public function setModel($mod)
    {
        $this->_model = $mod;
    }

    public function setkm($km)
    {
        $this->_km = $km;
    }

}


