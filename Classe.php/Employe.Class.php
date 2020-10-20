<?php
class Employe
{

    /*****************Attributs***************** */
    private $_nom;
    private $_prenom;
    private $_date;
    private $_poste;
    private $_salaire;
    private $_service;
    private $_conteur;
    private $_agence;
    /*****************Accesseurs***************** */
    //set
    public function setNom($n)
    {
        $this->_nom = $n;
    }
    public function setPrenom($p)
    {
        $this->_prenom = $p;
    }
    public function setDate(dateTime $d)
    {
        $this->_date = $d;
    }
    public function setPoste($p)
    {
        $this->_poste = $p;
    }
    public function setSalaire($s)
    {
        $this->_salaire = $s;
    }
    public function setService($se)
    {
        $this->_service = $se;
    }

    /**
     * Get the value of _conteur
     */
    public function get_conteur()
    {
        return $this->_conteur;
    }

    /**
     * Set the value of _conteur
     *
     * @return  self
     */
    public function set_conteur($c)
    {
        $this->_conteur = $c;

        return $this;
    }

    //getter
    public function getNom()
    {
        return $this->_nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function getDate()
    {
        return $this->_date;
    }

    public function getPoste()
    {
        return $this->_poste;
    }

    public function getSalaire()
    {
        return $this->_salaire;
    }

    public function getService()
    {
        return $this->_service;
    }
/**
     * Get the value of _agence
     */ 
    public function getAgence()
    {
        return $this->_agence;
    }

    /**
     * Set the value of _agence
     *
     * @return  
     */ 
    public function setAgence($a)
    {
        $this->_agence = $a;

        return $this;
    }
    /*****************Constructeur***************** */

    public function __construct(array $options = [])
    {
        //conteur de nb employee
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
     * Compare 2 objets sur le nom et le prénom
     * Renvoi 1 si le 1er est >
     *        0 si ils sont égaux
     *        -1 si le 1er est <
     *
     * @param [type] $obj1
     * @param [type] $obj2
     * @return void
     */
    public static function compareToServiceNomPrenom($obj1, $obj2)
    {
        if ($obj1->getService() < $obj2->getService()) {
            return -1;
        } else if ($obj1->getService() > $obj2->getService()) {
            return 1;
        } else {
            return self::compareToNomPrenom($obj1, $obj2);
        }

    }

    public static function compareToNomPrenom($obj1, $obj2)
    {
        if ($obj1->getNom() < $obj2->getNom()) {
            return -1;
        } else if ($obj1->getNom() > $obj2->getNom()) {
            return 1;

        } else {
            //si egale sur les noms -> compare les prenoms
            if ($obj1->getPrenom() < $obj2->getPrenom()) {
                return -1;
            } else {
                return 1;
            }

        }
    }

    public function toString()
    {
        return 'Nom : ' . $this->getNom() . 'Prenom : ' . $this->getPrenom() . ' Nombre anne ancienete : ' . $this->ancienete() . ' Service :' . $this->getService() . 'Poste : ' . $this->getPoste() . 'Salaire annuel : ' . $this->getSalaire(). 
        'Agence' .$this->getAgence()->toStringAgence() ."\n";
    }

    public function ancienete()
    {
        $now = new DateTime('now');
        $result = $now->diff($this->getDate());
        return $result->format('%Y') * 1;
    }

    public function primeAnnuel()
    {
        return ($this->getSalaire() * (5 / 100));
    }

    public function primeAncien()
    {
        return ($this->getSalaire() * (2 / 100) * $this->ancienete());
    }

    public function versePrime()
    {
        return ($this->primeAncien() + $this->primeAnnuel());
    }

    public function masseSalariale()
    {
        return ($this->getSalaire() + $this->versePrime());
    }


    
}

