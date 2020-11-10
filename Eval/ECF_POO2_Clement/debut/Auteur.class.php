<?php
class Auteur
{

    /*****************Attributs***************** */
    private $_nom;
    private $_prenom;
    private $_naissance;
    private $_deces;

    /*****************Accesseurs***************** */
    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom(string $nom)
    {
        $this->_nom = $nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom(string $prenom)
    {
        $this->_prenom = $prenom;
    }

    public function getNaissance()
    {
        return $this->_naissance;
    }

    public function setNaissance(DateTime $naissance)
    {
        $this->_naissance = $naissance;
    }

    public function getDeces()
    {
        return $this->_deces;
    }

    //peut aussi etre de type boolean
    public function setDeces(Datetime $deces)
    {
        $this->_deces = $deces;
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
    public function toString()
    {
        $text = "Nom : " . $this->getNom() . " Prénom : " . $this->getPrenom() . "Naissance" . $this->getNaissance();
        echo $text;
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] $obj
     * @return bool
     */
    public function equalsTo($obj)
    {
        return true;
    }
    /**
     * Compare 2 objets
     * Renvoi true si ils sont identique >
     *
     *
     * @param [type] $obj1
     * @param [type] $obj2
     * @return void
     */
    public static function compareTo($obj1, $obj2)
    {
        if ($obj1->getNom() == $obj2->getNom() && $obj1->getPrenom() == $obj2->getPrenom()) {
            //ont verifie la date de naissance et de deces
            return ($obj1->getNaissance() == $obj2->getNaissance() && $obj1->getDeces() == $obj2->getDeces());
        }
    }

    //retourn true si l'auteur est vivant (pas de date)
    public function estVivant()
    {
        if ($this->getDeces() != false) {
            return false;
        } else {
            //est vivant 
            return true;
        }
    }

}
