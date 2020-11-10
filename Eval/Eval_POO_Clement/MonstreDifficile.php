<?php
class MonstreDifficile extends MonstreFacile
{
  
    /*****************Attributs***************** */
    private $_pointvie;
    private $_estvivant;
    private $_de;


    /*****************Accesseurs***************** */
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

    public function getDe()
    {
        return $this->_de;
    }

    public function setDe($de)
    {
        $this->_de = $de;
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
        foreach ($data as $key => $value)
        {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }

    /*****************Autres Méthodes***************** */
    public function lanceLeDe()
    {
        return De::lanceLeDe();
    }
    
    public function monstreDiffAttaque()
    {
        parent::monstreFacAttaque();
        //methode magique
        $de = $this->lanceLeDe();
        if($de == 6)
        {
         
        }
    }


}