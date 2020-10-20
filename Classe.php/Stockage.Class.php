<?php
class Stockage
{
  
    /*****************Attributs***************** */
    private $_nentrepot;
    private $_ville;
    private $_zone;
    private $_categorie;

    /*****************Accesseurs***************** */
    /**
     * Get the value of _nentrepot
     */ 
    public function get_nentrepot()
    {
        return $this->_nentrepot;
    }

    /**
     * Set the value of _nentrepot
     *
     * @return  self
     */ 
    public function set_nentrepot($_nentrepot)
    {
        $this->_nentrepot = $_nentrepot;

        return $this;
    }

    /**
     * Get the value of _ville
     */ 
    public function get_ville()
    {
        return $this->_ville;
    }

    /**
     * Set the value of _ville
     *
     * @return  self
     */ 
    public function set_ville($_ville)
    {
        $this->_ville = $_ville;

        return $this;
    }

    /**
     * Get the value of _zone
     */ 
    public function get_zone()
    {
        return $this->_zone;
    }

    /**
     * Set the value of _zone
     *
     * @return  self
     */ 
    public function set_zone($_zone)
    {
        $this->_zone = $_zone;

        return $this;
    }

        /**
     * Get the value of _categorie
     */ 
    public function get_categorie()
    {
        return $this->_categorie;
    }

    /**
     * Set the value of _categorie
     *
     * @return  self
     */ 
    public function set_categorie($_categorie)
    {
        $this->_categorie = $_categorie;

        return $this;
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
    
    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString()
    {
        return "";
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] obj
     * @return bool
     */
    public function equalsTo($obj)
    {
        return true;
    }
    /**
     * Compare 2 objets
     * Renvoi 1 si le 1er est >
     *        0 si ils sont égaux
     *        -1 si le 1er est <
     *
     * @param [type] obj1
     * @param [type] obj2
     * @return void
     */
    public static function compareTo($obj1, $obj2)
    {
        return 0;
    }

    


}