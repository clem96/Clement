<?php
class Joueur
{
  
    /*****************Attributs***************** */
    private $_pointvie;
    private $_monstredifficle;
    private $_monstrefacile;
    private $_de;

    /*****************Accesseurs***************** */
    public function getDe()
    {
        return $this->_de;
    }

    public function setDe($d)
    {
        $this->_de = $d;
    }

    public function getPointvie()
    {
        return $this->_pointvie;
    }

    public function setPointvie($pointvie)
    {
        $this->_pointvie = $pointvie;
    }

    
    public function getMonstredifficle()
    {
        return $this->_monstredifficle;
    }

    public function setMonstredifficle($monstredifficle)
    {
        $this->_monstredifficle = $monstredifficle;
    }

  
    public function getMonstrefacile()
    {
        return $this->_monstrefacile;
    }

    public function setMonstrefacile($monstrefacile)
    {
        $this->_monstrefacile = $monstrefacile;
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
    public function lanceDe()
    {
        return  De::lanceLede(); 
    }
 

    public function estVivant()
    {
      ($this->getPointvie() > 0);
    }

    public function attaque()
    {
      $this->lanceDe();
    }

    public function subitDegats($degats)
    {
      
    }
  



    

}