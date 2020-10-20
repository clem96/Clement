<?php
class Agence
{

    /*****************Attributs***************** */
    private $_nom;
    private $_addresse;
    private $_cp;
    private $_ville;
    private $_restauration;

    /*****************Accesseurs***************** */
    /**
     * Get the value of _nom
     */
    public function get_nom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of _nom
     *
     * @return  self
     */
    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    /**
     * Get the value of _addresse
     */
    public function get_addresse()
    {
        return $this->_addresse;
    }

    /**
     * Set the value of _addresse
     *
     * @return  self
     */
    public function set_addresse($_addresse)
    {
        $this->_addresse = $_addresse;

        return $this;
    }

    /**
     * Get the value of _cp
     */
    public function get_cp()
    {
        return $this->_cp;
    }

    /**
     * Set the value of _cp
     *
     * @return  self
     */
    public function set_cp($_cp)
    {
        $this->_cp = $_cp;

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
     * Get the value of _restauration
     */
    public function get_restauration()
    {
        return $this->_restauration;
    }

    /**
     * Set the value of _restauration
     *
     * @return  self
     */
    public function set_restauration($restau)
    {
        $this->_restauration = $restau;

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
        foreach ($data as $key => $value) {
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
    public function toStringAgence()
    {
    return $this->get_restauration();
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
