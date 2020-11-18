<?php
class MonstreFacile 
{

    /*****************Attributs***************** */
    private $_pointvie;
    private $_estvivant;
    private $_de;

    /*****************Accesseurs***************** */
    public function getDe()
    {
        return $this->_de;
    }

    public function setDe($de)
    {
        $this->_de = $de;
    }
    public function getPointvie()
    {
        return $this->_pointvie;
    }

    public function setPointvie($pointvie)
    {
        $this->_pointvie = $pointvie;
    }

    public function getEstvivant()
    {
        return $this->_estvivant;
    }

    public function setEstvivant($estvivant)
    {
        $this->_estvivant = $estvivant;
    }

    /*****************Constructeur***************** */

    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
    }
    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }

    /*****************Autres Méthodes***************** */
    public function monstreFacAttaque()
    {
       $this->setDe =  de::lanceLeDe();

    }



}
