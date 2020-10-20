<?php
class Heritage extends Demo
{
  
    /*****************Attributs***************** */
     
    private $_largeur;  
    private $_hauteur;

    /*****************Accesseurs***************** */
    public function getLargeur()
    {
          return $this->_largeur;
    }

    public function setLargeur($largeur)
    {
          $this->_largeur = $largeur;
    }

    public function getHauteur()
    {
          return $this->_hauteur;
    }

    public function setHauteur($hauteur)
    {
          $this->_hauteur = $hauteur;
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
toString();
   
}