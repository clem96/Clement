<?php
class Produit
{
  
    /*****************Attributs***************** */
    private $_numero;
    private $_prixht;
    private $_designation;
    private $_couleur;
    private $_datevalid;
    private $_categorie;
    private $_Stockage;
    private $_conteur;
    /*****************Accesseurs***************** */
    /**
     * Get the value of _numero
     */ 
    public function getNumero()
    {
        return $this->_numero;
    }

    /**
     * Set the value of _numero
     *
     * @return  self
     */ 
    public function setNumero($_numero)
    {
        $this->_numero = $_numero;

        return $this;
    }

    /**
     * Get the value of _prixht
     */ 
    public function getPrixht()
    {
        return $this->_prixht;
    }

    /**
     * Set the value of _prixht
     *
     * @return  self
     */ 
    public function setPrixht($_prixht)
    {
        $this->_prixht = $_prixht;

        return $this;
    }

    /**
     * Get the value of _designation
     */ 
    public function getDesignation()
    {
        return $this->_designation;
    }

    /**
     * Set the value of _designation
     *
     * @return  self
     */ 
    public function setDesignation($_designation)
    {
        $this->_designation = $_designation;

        return $this;
    }

    /**
     * Get the value of _couleur
     */ 
    public function getCouleur()
    {
        return $this->_couleur;
    }

    /**
     * Set the value of _couleur
     *
     * @return  self
     */ 
    public function setCouleur($_couleur)
    {
        $this->_couleur = $_couleur;

        return $this;
    }

    /**
     * Get the value of _datevalid
     */ 
    public function getDatevalid()
    {
        return $this->_datevalid;
    }

    /**
     * Set the value of _datevalid
     *
     * @return  self
     */ 
    public function setDatevalid($_datevalid)
    {
        $this->_datevalid = $_datevalid;

        return $this;
    }

    /**
     * Get the value of _categorie
     */ 
    public function getCategorie()
    {
        return $this->_categorie;
    }

    /**
     * Set the value of _categorie
     *
     * @return  self
     */ 
    public function setCategorie($_categorie)
    {
        $this->_categorie = $_categorie;

        return $this;
    }

    /**
     * Get the value of _Stockage
     */ 
    public function getStockage()
    {
        return $this->_Stockage;
    }

    /**
     * Set the value of _Stockage
     *
     * @return  self
     */ 
    public function setStockage($_Stockage)
    {
        $this->_Stockage = $_Stockage;

        return $this;
    }

    /**
     * Get the value of _conteur
     */ 
    public function getConteur()
    {
        return $this->_conteur;
    }

    /**
     * Set the value of _conteur
     *
     * @return  self
     */ 
    public function setConteur($_conteur)
    {
        $this->_conteur = $_conteur;

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
        return "Numero article : " .$this->getNumero() ."\n Numero article : " .$this->getPrixht()."\n Designation : " .$this->getDesignation() ."\n Couleur: ".$this->getCouleur() ."\n Date validité : " .$this->getDatevalid()."\n Categorie : " .$this->getCategorie() ."\n Lieu de stokage : " .$this->getStockage();
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
   
    //verifie la date de validité revoie vrai si le produit nest pas perimé
    public function estPerimé()
    {
     $now = new DateTime('now');
     if($this->getDatevalid() < $now)
     {
      return true;  
     }
     return false;
    }
    

}